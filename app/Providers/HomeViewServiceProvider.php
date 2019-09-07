<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HomeViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      // view()->composer('home.advert', function($view) {
      //   $view->with('adverts', Advert::where('active',1)->get());
      //   $view->with('posts', DB::table('posts')->where('active',1)->orderBy('id','desc')->get());
      // });
    }
}
