<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use App\Models\Business;
use Illuminate\Http\Request;
use DB;
class BusinessTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = DB::table('business_types')->get();
        // dd($types);
        return view('catalog.index', compact('types'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessType  $businessType
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessType $businesstype)
    {
        $businesstype = BusinessType::with('businesses')->find($businesstype->id);
        // dd($businessType);
        return view('catalog.type', compact('businesstype'));
    }
}
