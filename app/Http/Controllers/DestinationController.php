<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use DB;

class DestinationController extends Controller
{
  public function index()
  {
    $destinations = DB::table('destinations')->get();
      return view('destinations.index', compact('destinations'));
  }
  public function show(Destination $destination)
  {
    $destination = Destination::with('images')->findOrFail($destination->id);
    // dd(count($destination->images));
      return view('destinations.show', compact('destination'));
  }
}
