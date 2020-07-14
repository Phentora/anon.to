<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UpgradeDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'anonto:upgrade:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upgrade Database';

    /**
     * @var string[]
     */
    private $old_tables;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->old_tables = [
            'contents',
            'links',
            'link_reports',
            'users',
        ];
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            if (DB::table('user_activations')->first()) {
                DB::table('users')->where('id', 1)->update(['active' => 1]);
                foreach ($this->old_tables as $old_table) {
                    $path = storage_path("backups/$old_table-database-backup.json");
                    $this->backupDatabase($old_table, $path);
                }
            }
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }

        $this->call('migrate:fresh', ['--seed' => true, '--force' => true]);

        $path = storage_path("backups/users-database-backup.json");
        $this->restoreDatabase('users', $path, ['active' => 1], ['active' => '']);
        DB::unprepared("UPDATE `users` SET `email_verified_at`=`updated_at`;");
        DB::table('users')->where('id', 1)->update(['password' => Hash::make(Str::random(69))]);

        $path = storage_path("backups/contents-database-backup.json");
        $this->restoreDatabase('contents', $path, [], ['title_slug' => 'slug']);

        $path = storage_path("backups/links-database-backup.json");
        $this->restoreDatabase('links', $path);

        $path = storage_path("backups/link_reports-database-backup.json");
        $this->restoreDatabase('reports', $path, [], ['link_id' => '']);
        DB::unprepared("UPDATE `reports` SET `dealt_at`=`updated_at`;");

        $this->info('Database Upgraded Successfully!');

        return 0;
    }

    private function backupDatabase($table, $path)
    {
        $database = DB::table($table)->get()->toJson();
        File::put($path, $database);
        $this->info("$table database backed up successfully at: " . $path);
    }

    private function restoreDatabase($table, $path, $where = [], $maps = [])
    {
        if (File::exists($path)) {
            $database = collect(json_decode(File::get($path), true));
            if (!empty($where)) {
                foreach ($where as $where_key => $where_value) {
                    $database = $database->where($where_key, $where_value);
                }
            }

            foreach ($database->toArray() as $data) {
                if (!empty($maps)) {
                    foreach ($maps as $map_from => $map_to) {
                        if (isset($data[$map_from])) {
                            if (!empty($map_to)) {
                                $data[$map_to] = $data[$map_from];
                            }
                            unset($data[$map_from]);
                        }
                    }
                }
                DB::table($table)->updateOrInsert(['id' => $data['id']], $data);
            }

            $this->info("$table database restored successfully");
        }
    }
}
