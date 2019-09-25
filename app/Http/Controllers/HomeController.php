<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use App\Models\Country;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.account');
    }

    public function home()
    {
        $countries= Country::all();
        if ( ! (Cache::has('key'))) {
            Cache::forever('countries', $countries);
        }

        return view('home')->with('countries',$countries);
    }
}
