<?php

namespace App\Console\Commands;

use App\Models\Redirect;
use App\Services\AnonServices;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateAnalytics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:analytics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Analytics';

    /**
     * @var array
     */
    private $hashes, $urls;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->hashes = [];
        $this->urls = [];
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        while ($data = app('redis')->rpop('redirects')) {
            if (!is_valid_url($data)) {
                $this->countHashes($data);
            } else {
                $this->countUrls($data);
            }
        }

        if (count($this->hashes)) {
            foreach ($this->hashes as $hash => $count) {
                DB::table('links')
                    ->where('hash', $hash)
                    ->increment('visits', $count, ['visited_at' => carbon()]);

                $this->info($hash . ' : ' . $count);
            }
        }

        if (count($this->urls)) {
            foreach ($this->urls as $hash => $url) {
                if (DB::table('redirects')->where('hash', $hash)->first()) {
                    DB::table('redirects')->where('hash', $hash)
                        ->increment('visits', $url['count'], ['visited_at' => carbon()]);
                } else {
                    Redirect::create([
                        'hash' => $hash,
                        'url' => $url['url'],
                        'visited_at' => carbon(),
                        'visits' => $url['count'],
                    ]);
                }

                $this->info($url['url'] . ' : ' . $url['count']);
            }
        }

        return 0;
    }

    private function countHashes($hash)
    {
        if (isset($this->hashes[$hash])) {
            $this->hashes[$hash] += 1;
        } else {
            $this->hashes[$hash] = 1;
        }
    }

    private function countUrls($url)
    {
        $parsed = app(AnonServices::class)->parseUrl($url);
        $url = app(AnonServices::class)->unParseUrl($parsed);

        $hash = md5($url);
        if (isset($this->urls[$hash])) {
            $this->urls[$hash]['count'] += 1;
        }

        $this->urls[$hash]['url'] = $url;
        $this->urls[$hash]['count'] = 1;
    }
}
