@extends('layouts.master')
{{-- @section('title', $destination->title. '. __('head.post'))) --}}
@section('meta_description', ' '.$destination->meta_description)
@section('meta_keywords' .'$destination->meta_keywords'.', '. '$destination->category->name'.', '.__('head.postcategory'))

@section('content')
  <div class="container">
    <div id="posts">
      <div class="row">

        <div class="col-xs-12 col-sm-8">
            <img src="{{ asset('images/destinations/'.$destination->image) }}" alt="{{ $destination->title }}" width="100%" height="300px">
        </div>

      </div>
    </div>

  </div>
  <br>
@endsection
