@extends('layouts.master') @section('title', __('head.contactheadtitle')) @section('meta_description',
__('meta.contactpagedescription')) @section('meta_keywords', 'contact form, contact
us, more info,') @section('content') {{-- @foreach ($iterable as $key => $value)
@endforeach --}}
<table id="sobi2CatListSymbols">
		<tbody>
			@foreach ($types->chunk(3) as $chunk)
			<tr>
				@foreach ($chunk as $type)
				<td style="width: 33.333333333333%;">
					<a href="{{'catalog/'.$type->slug}}" class="sobi2_category_links_button_MAD">
					<img src="{{asset('images/'.$type->icon)}}" alt="{{$type->title}}" class="sobi2CatIco" style="float:left; border-style:none;">
					<p class="sobi2CatName">{{$type->title}}</p></a>
					<p class="sobi2CatsListSymbolsIntrotext"></p>
				</td>
			@endforeach
			</tr>
		@endforeach
</tbody>
</table>
@endsection
