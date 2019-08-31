<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
  public function index()
  {
    $destinations = Destination::all();
      return view('destinations.index', compact('destinations'));
  }
  public function show(Destination $destination)
  {
    $destination = Destination::findOrFail($destination->id);
    // dd($destination);
      return view('destinations.show', compact('destination'));
  }
}
