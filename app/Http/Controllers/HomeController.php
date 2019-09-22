<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $countries = \App\Models\Country::all();
        // $prefectures = \App\Models\State::all();
        // $municipalities = \App\Models\City::all();
        // return view('home', compact('countries','prefectures','municipalities'));
        return view('home');
    }
}
