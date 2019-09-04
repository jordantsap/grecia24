@extends('layouts.master')
{{-- @section('title', $destination->title. '. __('head.post'))) --}}
@section('meta_description', ' '.$destination->meta_description)
@section('meta_keywords' .'$destination->meta_keywords'.', '. '$destination->category->name'.', '.__('head.postcategory'))

@section('content')
  <div class="row border">

  </div>
  <br>
@endsection
