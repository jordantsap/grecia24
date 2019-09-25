<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
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
      // serchform
      // view()->composer('home', function($view) {
      //   $view->with('countries', DB::table("countries")->get());
      //   $view->with('states', \App\Models\State::all());
      //   $view->with('cities', \App\Models\City::all());
      //   $view->with('posts', DB::table('posts')->where('active',1)->orderBy('id','desc')->get());
      // });
    }
}
