<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Support\Facades\Cache;

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
      view()->composer('home.search', function($view) {
        if (Cache::has('countries')) {
          $countries = Cache::rememberForever('countries', function (){
            DB::table('countries');
            // return view('home', compact('countries'));
          });
        } else {
          $countries = DB::table('countries')->get();
        }
        $view->with('countries', $countries);
        // $view->with('states', \App\Models\State::all());
        // $view->with('cities', \App\Models\City::all());
      //   $view->with('posts', DB::table('posts')->where('active',1)->orderBy('id','desc')->get());
      });
    }
}
