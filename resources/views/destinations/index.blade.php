@extends('layouts.master')
{{-- @section('title', __('head.contactheadtitle')) @section('meta_description', __('meta.contactpagedescription')) @section('meta_keywords', 'contact form, contact us, more info,') --}}

@section('breadcrumbs')
    {{ Breadcrumbs::render('destinations') }}
@endsection

@section('content')

<article class="row art-post">
  <div class="art-postmetadataheader">
    <h2 class="art-postheader">Τουριστικοί Προορισμοί</h2>
  </div>
</article>
<div class="row art-post">
  @if(count($destinations) > 0)
    @foreach ($destinations as $destination)
  <div class="col-xs-12 col-sm-4 col-md-4">
    <div class="card h-100">
      <a href="{{ route('destinations.show', $destination->slug) }}">
        <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;" src="{{asset('images/destinations/'.$destination->image)}}"
          alt="{{ $destination->title }}">
      </a>
    </div>
    <div class="text-center" style="margin: 10px 0px 5px 0px;">
      <a href="{{ route('destinations.show',$destination->slug) }}">{{ str_limit($destination->title, 30) }}</a>
    </div>
  </div>

  @endforeach
  @endif
</div>
@endsection
