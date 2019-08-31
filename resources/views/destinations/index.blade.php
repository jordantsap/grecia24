@extends('layouts.master') @section('title', __('head.contactheadtitle')) @section('meta_description',
__('meta.contactpagedescription')) @section('meta_keywords', 'contact form, contact
us, more info,')
@section('content')


<div class="row">
  @if(count($destinations) > 0) @foreach ($destinations as $destination)
  <div class="col-xs-12 col-sm-4 col-md-4 portfolio-item">
    <div class="card h-100">
      <a href="{{ route('destinations.show', $destination->slug) }}">
        <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;" src="{{asset('images/destinations/'.$destination->image)}}"
          alt="{{ $destination->title }}">
      </a>
    </div>
    <div class="text-center">
      <br>
      <a href="{{ route('destinations.show',$destination->slug) }}">{{ str_limit($destination->title, 30) }}</a>

    </div>
  </div>

  @endforeach
  @endif
</div>
<br>
@endsection
