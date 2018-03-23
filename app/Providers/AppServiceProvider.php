<?php

namespace App\Providers;

use App\topnav;
use App\widget;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('topnav',function($view){
            $view->with('gettopnav',topnav::all());
        });

        view()->composer('footer',function($view){
            $view->with('getfooter',widget::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
