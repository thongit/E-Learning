<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\linhvuc;
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
        view()->composer('header',function($view)
        {
            $linhvucs=linhvuc::all();
            $view->with('linhvucs',$linhvucs);
        });
    }
}
