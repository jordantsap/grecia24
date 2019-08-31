@extends('layouts.master')
@section('title', __('head.contactheadtitle'))
@section('meta_description',
__('meta.contactpagedescription'))
@section('meta_keywords', 'contact form, contact
us, more info,')

@section('content')
<article class="art-post">
	<div class="art-postmetadataheader">
		<h2 class="art-postheader"><span class="componentheading">Online Business Catalog</span></h2>
	</div>
	<div class="art-postcontent clearfix">
		<!-- Start of Sigsiu Online Business Index 2 component -->

		<div class="sobi2">

			<table class="sobi2CompDesc">
				<tbody>
					<tr>
						<td>
							<img src="{{asset('images/catalog/ktimatomesites.png')}}" style="float:left;" alt="" title="Real Estate Agents">
						</td>
					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					@foreach ($businesses->chunk(2) as $chunk)
					<tr>
						@foreach ($chunk as $type)
						<td style="width: 50%; border-style: solid; border-color: #ffffff">

							<p class="sobi2ItemTitle"><a href="" title="Hellenic Homes - Panagopoulos">{{$type->title}}</a></p>
							<a href=""><img class="sobi2Listing_img" src="https://grecia24.gr/images/com_sobi2/clients/2_img.png" alt="Hellenic Homes - Î&nbsp;Î±Î½Î±Î³ÏŒÏ€Î¿Ï…Î»Î¿Ï‚" title="Hellenic Homes - Î&nbsp;Î±Î½Î±Î³ÏŒÏ€Î¿Ï…Î»Î¿Ï‚"></a> <span
							  class="sobi2Listing_field_street_en">Propileon 19,</span> <span class="sobi2Listing_field_city_en">Athens - Acropolis</span> <span class="sobi2Listing_field_phone">+302109220650</span>
							<br>
							<span class="sobi2Listing_field_email">
								<a href="mailto:telospap<blade yahoo.gr">Email</a>
							</span>
							<span class="sobi2Listing_field_website"><a href="http://www.exnet.gr" title="Exnet Hellas" target="_blank">Website</a></span>
							<br>
							<span class="sobi2Listing_field_more"><a href="https://grecia24.gr/index.php?option=com_sobi2&amp;sobi2Task=sobi2Details&amp;catid=2&amp;sobi2Id=2&amp;Itemid=692&amp;lang=en">read more...<img
									  style="float:right;margin-right:10px;margin-top:5px;" src="/components/com_sobi2/images/arrow_right.gif"></a></span>

							<!-- here ends the template -->

							<!-- Don't remove these lines! -->
						</td>
						@endforeach
					</tr>
					@endforeach
				</tbody>
			</table>


			<div id="sobi2PageNav">
				<div class="art-pager"><span class="active">Start</span><span class="active">Prev</span><span class="active">1</span><a title="2" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=6"
					  class="">2</a><a title="3" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=12" class="">3</a><a title="4"
					  href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=18" class="">4</a><a title="5" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=24" class="">5</a><a
					  title="6" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=30" class="">6</a><a title="7" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=36"
					  class="">7</a><a title="8" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=42" class="">8</a><a title="9"
					  href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=48" class="">9</a><a title="10" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=54"
					  class="">10</a><a title="Next" href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=6" class="">Next</a><a title="End"
					  href="/index.php?option=com_sobi2&amp;catid=2&amp;Itemid=692&amp;lang=en&amp;limitstart=84" class="">End</a></div><span id="one_time"></span>
			</div>
			<table class="sobi2Footer">
				<tbody>
					<tr>
						<td id="sobi2Footer"></td>
						<td id="sobi2rss"><a href="https://grecia24.gr/index.php?option=com_sobi2&amp;sobi2Task=rss&amp;no_html=1&amp;catid=2&amp;Itemid=692&amp;lang=en" title="RSS Feeds"><img
								  src="https://grecia24.gr/components/com_sobi2/images/feed.gif" alt="RSS Feeds"></a></td>
					</tr>
					<tr>
						<td colspan="2"></td>
					</tr>

				</tbody>
			</table>

		</div>

		<!-- end of Sigsiu Online Business Index 2 component Memory 3,253,528 / Time 3.7565989494324 / Queries: 0 -->
	</div>
</article>
@endsection
