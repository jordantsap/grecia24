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
      view()->composer('home', function($view) {
        $view->with('countries', \App\Models\Country::all());
        $view->with('prefectures', \App\Models\Prefecture::all());
        $view->with('municipalities', \App\Models\Municipality::all());
        // $view->with('posts', DB::table('posts')->where('active',1)->orderBy('id','desc')->get());
      });
    }
}
