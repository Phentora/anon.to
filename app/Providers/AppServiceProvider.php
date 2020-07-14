<?php

namespace App\Providers;

use App\Services\MetaDataService;
use App\Services\UrlServices;
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
        $this->app->singleton(UrlServices::class);
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
