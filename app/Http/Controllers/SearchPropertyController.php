<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchPropertyController extends Controller
{
    public function getStateList(Request $request)
        {
            $states = DB::table("states")
            ->where("country_id",$request->country_id)
            ->pluck("name","id");
            \Cache::forever('states', $states);
            return response()->json($states);
        }

        public function getCityList(Request $request)
        {
            $cities = DB::table("cities")
            ->where("state_id",$request->state_id)
            ->pluck("name","id");
            \Cache::forever('states', $cities);
            return response()->json($cities);
        }
}
