@extends('layouts.master')
@section('title', __('head.contactheadtitle'))
@section('meta_description',
__('meta.contactpagedescription'))
@section('meta_keywords', 'contact form, contact
us, more info,')

@section('breadcrumbs')
{{ Breadcrumbs::render('business', $business) }}
@endsection

@section('content')

<section>
	<div class="art-layout-wrapper">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
				<div class="art-layout-cell art-content">
					<article class="art-post art-messages" style="display: none;">
						<div class="art-postcontent clearfix"></div>
					</article>
					<article class="art-post">
						<div class="art-postmetadataheader">
							<h2 class="art-postheader"><span class="componentheading">
									{{$business->title}}
								</span></h2>
						</div>
						<div class="art-postcontent clearfix">
							<!-- Start of Sigsiu Online Business Index 2 component -->

							<div class="row sobi2">
								<table class="sobi2Details" style="border-style: solid; border-color: #ffffff">
									<tbody class="col-xs-12">
										<tr>
											<td>
												<h1>{{$business->title}}</h1>
											</td>
										</tr>
										<tr class="row col-xs-12">
											<td>
												<img src="{{$business->logo}}" alt="Exnet Hellas" class="sobi2DetailsImage" width="100px" height="100px">
												<div id="sobi2outer">
													<br>
													<span style="width:100%;display:block; margin-bottom:-4px;">
														<span id="sobi2Details_field_street">{{$business->address}}</span>
														<span id="sobi2Details_field_city">Θεσσαλονίκη</span>,
														<span id="sobi2Details_field_postcode">{{$business->tk}}</span>
													</span>
													<div style="width:33%;display:inline-table;">
														<span id="sobi2Details_field_phone">{{$business->tel}}</span>
														<span id="sobi2Details_field_fax">{{$business->fax}}</span>
													</div>
													<div style="width:33%;display:inline-table;">
														<span id="sobi2Details_field_website">
															<a href="{{$business->url ? $business->url : '#'}}" title="{{$business->url ? $business->title : 'Notitle'}}" target="{{$business->url ? '_blank' : ''}}">Website</a>
														</span>
														<span id="sobi2Details_field_email">

															<a href="mailto:{{$business->email}}">Email</a>
															<script language="JavaScript" type="text/javascript">
																<!--
																document.write('<span style=\'display: none;\'>');
																//
																-->
															</script>
															<span style="display: none;">Αυτή η διεύθυνση ηλεκτρονικού ταχυδρομείου προστατεύεται
																από κακόβουλη χρήση. Χρειάζεται να ενεργοποιήσετε
																την Javascript για να τη δείτε.
																<script language="JavaScript" type="text/javascript">
																	<!--
																	document.write('</');
																	document.write('span>');
																	//
																	-->
																</script>
															</span>
														</span>
													</div>
													<br>


													<div class="dynamic-tab-pane-control tab-page" id="---Tabs-Pane">


														<div class="tab-row" role="tablist">
															<h2 class="tab selected">
																<a href="#" aria-controls="Tab1" role="tab" data-toggle="tab">Πληροφορίες</a>
															</h2>
															<h2 class="tab">
																<a href="#Tab2" aria-controls="Tab2" role="tab" data-toggle="tab">Φωτογραφίες</a>
															</h2>
															<h2 class="tab">
																<a href="#Tab3" aria-controls="Tab3" role="tab" data-toggle="tab">Χάρτης</a>
															</h2>
															{{-- <div class="col-xs-12">
																<ul class="nav nav-tabs" role="tablist">
															    <li role="presentation" class="selected"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
															    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
															    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
															  </ul>
															</div> --}}
														</div>

														<div class="tab-content">


															<div role="tabpanel" class="tab-page selected" id="Tab1">
																{{-- <script type="text/javascript">
																	SobiTabPane.addTabPage(document.getElementById(
																		"Tab1"));
																</script> --}}
																<br>
																<span id="sobi2Details_field_description">
																	<strong>{{$business->title}}</strong>
																	&nbsp;{{$business->description}}</span>
															</div>
															<div role="tabpanel" class="tab-page" id="Tab2">
																{{-- <script type="text/javascript">
																	SobiTabPane.addTabPage(document.getElementById(
																		"Tab2"));
																</script> --}}
																<br>
																@if(count($business->images) > 1)
																	@foreach($business->images as $image)
																		<div class="col-xs-3">
																			<br>
																			<a href="{{$image->file}}" data-lightbox="businessimage">
																				<img src="{{$image->file}}" alt="" width="100%" height="100px">
																			</a>
																		</div>
																		@endforeach
																		@else
																		<p class="text-center">No published images</p>
																		@endif
																		<br>
															</div>
															<div role="tabpanel" class="tab-page" id="Tab3">
																{{-- <script type="text/javascript">
																	SobiTabPane.addTabPage(document.getElementById(
																		"Tab3"));
																</script> --}}
																{{-- MAP STARTS HERE --}}
																<div style="width: 100%; height: 300px; position: relative; overflow: hidden;" id="sobi2GoogleMaps">
																	<div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
																		<div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
																			<div tabindex="0"
																			  style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
																				<div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
																					<div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
																						<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
																							<div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -247, -134);">
																								<div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
																									<div style="width: 256px; height: 256px;"></div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
																					<div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
																					<div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
																						<div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
																							<div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -247, -134);">
																								<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
																							</div>
																						</div>
																						<div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;"><img alt=""
																							  src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png" draggable="false"
																							  style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																						</div>
																					</div>
																					<div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
																					<div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
																				</div>
																				<div class="gm-style-pbc"
																				  style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
																					<p class="gm-style-pbt"></p>
																				</div>
																				<div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
																					<div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
																						<div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
																						<div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
																						<div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
																							<div style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: -14px; top: -43px; z-index: 0;">
																								<img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png" draggable="false" usemap="#gmimap0"
																								  style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">

																								<map name="gmimap0" id="gmimap0">
																									<area log="miw" coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75" shape="poly" title="Exnet Hellas" style="cursor: pointer; touch-action: none;">
																								</map>

																							</div>
																						</div>
																						<div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
																					</div>
																				</div>
																			</div>
																			<iframe aria-hidden="true" frameborder="0" src="about:blank" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
																		</div>
																	</div>
																	<div
																	  style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
																		<div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false"
																			  style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div>
																		<div style="line-height: 20px; margin: 15px 0px;">
																			<span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Αυτή η σελίδα δεν μπορεί να φορτώσει σωστά τους
																				Χάρτες Google.</span>
																		</div>
																		<table style="width: 100%;">
																			<tr>
																				<td style="line-height: 16px; vertical-align: middle;">
																					<a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors"
																					  target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Είστε κάτοχος αυτού του ιστοτόπου;</a>
																				</td>
																				<td style="text-align: right;">
																					<button class="dismissButton">ΟΚ</button>
																				</td>
																			</tr>
																		</table>
																	</div>
																</div>

																<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

																<script type="text/javascript">
																	var SobiGeoMap = '';
																	var marker = '';

																	function loadmap() { //MARKER HERE
																		var center = new google.maps.LatLng(40.671924,
																			22.938681);

																		var mapOptions = {
																			zoom: 14,
																			center: center,
																			mapTypeId: google.maps.MapTypeId.ROADMAP
																		}

																		SobiGeoMap = new google.maps.Map(document.getElementById(
																			'sobi2GoogleMaps'), mapOptions);

																		marker = new google.maps.Marker({
																			position: center,
																			map: SobiGeoMap,
																			title: '{{$business->title}}'
																		});
																	}

																	if (window.attachEvent) {
																		window.attachEvent('onload', loadmap);
																	} else if (window.addEventListener) {
																		window.addEventListener('load', loadmap, false);
																	}
																</script>
															</div>



														</div>

													</div>
													{{-- <script type="text/javascript">
														setupAllTabs();
													</script> --}}
													{{-- <link rel="stylesheet" href="{{asset('css/adsmanager.css')}}" type="text/css">
													<script type="text/javascript">
														jQuery(document).ready(function() { //na check ton selector kalitera



															$('#soby_ads').load(
																'index.php?option=com_adsmanager&view=list&user=65&Itemid=691&sobi=1 .art-layout-wrapper',
																function() {
																	$(
																		'#soby_ads header, #soby_ads .art-sidebar2, #soby_ads .adsmanager_search_box, #soby_ads #adsmanager_innermenu, #soby_ads .adsmanager_category_links_header, #soby_ads .art-footer,  #soby_ads  .art-block'
																	).remove();
																});

															$('.art-pager a').live('click', function(e) {

																e.preventDefault();
																$('#soby_ads').html('');

																var limitstart = (parseInt($(this).text()) -
																	1) * 10;

																$('#soby_ads').load(
																	'index.php?option=com_adsmanager&view=list&user=65&Itemid=691&sobi=1&limitstart=' +
																	limitstart + ' .art-layout-wrapper',
																	function() {
																		$(
																			'#soby_ads header, #soby_ads .art-sidebar2, #soby_ads .adsmanager_search_box, #soby_ads #adsmanager_innermenu, #soby_ads .adsmanager_category_links_header, #soby_ads .art-footer,  #soby_ads  .art-block'
																		).remove();
																	});

															})


															$("#TabsPane div.tab-row h2.tab:eq(2)").click(
																function(event) {

																	google.maps.event.trigger(sobi2GoogleMaps,
																		'resize');
																	SobiGeoMap.setCenter(marker.position);
																});
														});
													</script> --}}
												</div>
											</td>
										</tr>
										<tr>
											<td align="center"></td>
										</tr>
										<tr>
											<td></td>
										</tr>
										<tr>
										</tr>
									</tbody>
								</table>



								{{-- <div id="soby_ads" style="float:left;height:auto;padding:1%;width:98%;"></div> --}}
								<table class="sobi2DetailsFooter" width="100%">
									<tbody>
										<tr>
											<td align="center">
												Ημερομηνία προσθήκης: {{$business->created_at}} &nbsp;&nbsp; Επισκέψεις: 857 </td>
											<td></td>
										</tr>
									</tbody>
								</table>
								<table class="sobi2Footer">
									<tbody>
										<tr>
											<td id="sobi2Footer"></td>
											<td id="sobi2rss">
												<a href="" title="RSS Feeds"><img src="{{asset('images/catalog/feed.gif')}}" alt="RSS Feeds"></a>
											</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</tbody>
								</table>

							</div>

							<!-- end of Sigsiu Online Business Index 2 component Memory 943,776 / Time 2.5660951137543 / Queries: 0 -->
						</div>
					</article>

				</div>

			</div>
		</div>
	</div>
</section>
@section('extra-js')
{{-- <script type="text/javascript">
	//Business tabs
	$(document).ready(function() {

		$('.dynamic-tab-pane-control .tab-row a').click(function() {

			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')

				&&
				location.hostname == this.hostname) {

				var $target = $(this.hash);

				$target = $target.length && $target

					||
					$('[name=' + this.hash.slice(1) + ']');

				if ($target.length) {

					var targetOffset = $target.offset().top - 1000;

					$('html,body')

						.animate({
							scrollTop: targetOffset
						}, 20000);
					.animate({
						scrollBottom: targetOffset
					}, 20000);

					return false;

				}

			}

		});

	}); --}}
</script>

@endsection
@endsection
