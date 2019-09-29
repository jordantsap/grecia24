<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Cache;
use Spatie\Searchable\Search;
use App\Models\Advert;
class AdvertSearchController extends Controller
{
    /**
     * search records in database and display  results
     * @param  Request $request [description]
     * @return view      [description]
     */
    public function adsearch(Request $request)
    {

        $data = \DB::table('adverts');
        if( $request->country){
            $data = $data->where('country_id', $request->country);
        }
        if( $request->state){
            $data = $data->where('state_id', $request->state);
        }
        if( $request->city){
            $data = $data->where('city_id', $request->city);
        }
        if( $request->tsearch){
            $data = $data->where('title', 'LIKE', "%" . $request->tsearch . "%")
            ->orWhere('ad_description', 'LIKE', "%" . $request->tsearch . "%")
            ->orderBy('title', 'ASC');
        }
        if( $request->price_from && $request->price_to ){
            $data = $data->where('ad_price', '>=', $request->price_from)
                         ->where('ad_price', '<=', $request->price_to);
        }
        if( $request->embadom_from && $request->embadom_to ){
            $data = $data->where('ad_emvadonoikop', '>=', $request->embadom_from)
                         ->where('ad_emvadonoikop', '<=', $request->embadom_to);
        }
        $data = $data->paginate(10);
        // dd($data);
        return view('searchresults', compact('data'));
    }


    // HOMEPAGE AJAX CALLS
    public function getStateList(Request $request)
        {
            $states = DB::table("states")
            ->where("country_id",$request->country_id)
            ->pluck("name","id");
            if ( ! (Cache::has('states'))) {
                \Cache::forever('states', $states);
            }
            return response()->json($states);
        }

        public function getCityList(Request $request)
        {
            $cities = DB::table("cities")
            ->where("state_id",$request->state_id)
            ->pluck("name","id");
            if ( ! (Cache::has('cities'))) {
                \Cache::forever('cities', $cities);
            }
            return response()->json($cities);
        }
}
