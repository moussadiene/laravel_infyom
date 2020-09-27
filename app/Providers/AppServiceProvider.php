<?php

namespace App\Providers;

use Illuminate\Routing\Route;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
       
        // Route::group([
        //     'middleware' => 'api',
        //     'namespace' => $this->namespace."\\API",
        //     'prefix' => 'api',
        //     'as' => 'api.',
        // ], function ($router) {
        //     require base_path('routes/api.php');
        // }); 
    }
}
