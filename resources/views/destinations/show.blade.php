@extends('layouts.master')
{{-- @section('title', $destination->title. '. __('head.post'))) --}}
@section('meta_description', ' '.$destination->meta_description)
@section('meta_keywords' .'$destination->meta_keywords'.', '. '$destination->category->name'.', '.__('head.postcategory'))


  @section('breadcrumbs')
      {{ Breadcrumbs::render('destinations.show', $destination) }}
  @endsection


@section('content')
  {{-- <div class=""> --}}
    <div id="posts">
      <div class="row">

        <div class="col-xs-12">
            <img src="{{ asset('images/destinations/'.$destination->image) }}" alt="{{ $destination->title }}" width="100%" height="300px">
        </div>

        @if(count($destination->images) > 0)
            @foreach($destination->images as $image)
              <div class="col-xs-3">
                <br>
                <a href="{{$image->file}}" data-lightbox="destinationimage">
                  <img src="{{$image->file}}" alt="" width="100%" height="100px">
                </a>
              </div>
            @endforeach @else
            <p class="text-center">No published images</p>
        @endif

      </div>
    </div>

  {{-- </div> --}}
  <br>
  @section('extra-js')
    <script>
        lightbox.option({
          'resizeDuration': 500,
          'fadeDuration' : 500
        })
    </script>
  @endsection
@endsection
