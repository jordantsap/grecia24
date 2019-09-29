@extends('layouts.master')
@section('title', __('head.contactheadtitle'))
@section('meta_description', __('meta.contactpagedescription'))
@section('meta_keywords', 'contact form, contact us, more info,')

@section('breadcrumbs')
    {{-- {{ Breadcrumbs::render('drivers') }} --}}
@endsection

@section('content')
  <div class="row">@include('home.search')</div>

  <table id="sobi2CatListSymbols">
  		<tbody>
  			@if (count($data) > 0)
          @foreach ($data->chunk(3) as $chunk)
    			<tr>
    				@foreach ($chunk as $advert)
    				<td style="width: 33.333333333333%;">
    					<a href="{{'catalog/'.$advert->slug}}" class="sobi2_category_links_button_MAD">
    					<img src="{{asset('images/')}}" alt="{{$advert->title}}" class="sobi2CatIco" style="float:left; border-style:none;">
    					<p class="sobi2CatName">{{$advert->title}}</p></a>
    					<p class="sobi2CatsListSymbolsIntrotext"></p>
    				</td>
    			@endforeach
    			</tr>
    		@endforeach
        @else
          <tr>
            <h2>{{__('no results here')}}</h2>
          </tr>

        @endif
  </tbody>
  </table>
  {{ $data->links() }}

  {{-- @if(isset($searchResults))
                @if ($searchResults-> isEmpty())
                    <h2>Sorry, no results found for the term <b>"{{ $searchterm }}"</b>.</h2>
                @else
                    <h2>There are {{ $searchResults->count() }} results for the term <b>"{{ $searchterm }}"</b></h2>
                    <hr />
                    @foreach($searchResults->groupByType() as $advert => $modelSearchResults)
                    <h2>{{ ucwords($advert) }}</h2>

                    @foreach($modelSearchResults as $searchResult)
                        <ul>
                                <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
                        </ul>
                    @endforeach
                    @endforeach
                @endif
            @endif --}}
@endsection
