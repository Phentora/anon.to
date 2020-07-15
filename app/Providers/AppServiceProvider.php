<?php

namespace App\Providers;

use App\Services\AnonServices;
use App\Services\MetaDataService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MetaDataService::class);
        $this->app->singleton(AnonServices::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require app_path('Helpers/Helpers.php');
    }
}
