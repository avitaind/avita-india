@extends('layouts.app')

@section('title')
	@lang('title.where_to_buy')
@stop

@section('css')
	<style>
	
	/** 
		.shop-list {
			min-height: 400px;
			max-height: 565px;
			overflow-y: auto;
			cursor: default;
		}


		.shop-row .shop-name{
			font-size: 1.1rem;
			font-weight: 700;
		}

		.shop-row .shop-address, .shop-row .shop-phone {
			padding-right: 10px;
			padding-left: 30px;

			position: relative;
			font-size: 0.9em;
		}

		.shop-row .icon {

			position: absolute;
			left: 0px;
			top: 5px;

		}
		***/

		.shopsList {
   			 display: inline-table;
    		 width: 100%;
			}


			.shopsList .pb-1 {
    		font-size: 1.5rem;
    		font-weight: 500;
    		margin-bottom: .5rem;
			}

			.pb-1 {
    			padding-bottom: .25rem!important;
				weight:800;
			}

			.shopsList .col-md-6:nth-child(2n+1) {
    			clear: both;
				}

			.shopsList .col-md-6 {
    			display: inline-grid;
    			width: 50%;
    			margin-bottom: 30px;
			}	
	</style>
@stop

@php
        $page = 'wheretobuy';

@endphp

@section('content')

	<main class="top-nav-padding">

		@include('partials.product-navbar')
		@include('partials.rolling-cta')
	
	
<section class="map-panel">
	
		<!--	<div class="h2 pt-5 px-5 text-center font-weight-light">Exclusive Brand Store</div> 
		<hr class="w-25"/>
---->
	<div class="container py-5 ls-0">
                <div class="shopsList">
				@foreach( $shops as $shop )
					<div class="col-md-6">					
                            <div class="pb-1"><strong>{{ $shop->name }}</strong></div>
                            <div class="">
                                <i class="fa fa-map icon"></i>
                                {{ $shop->address }}
                            </div>
                            <div class="">
                                <i class="fa fa-phone icon"></i>
                                {{ $shop->phone }}
                            </div>
        
                        </div>
					@endforeach
				</div>
				
		</div>
	
<!---
		<div class="h2 pt-5 px-5 text-center font-weight-light">Retail Partners</div>
<hr class="w-25"/>

<div class="container py-5 ls-0">
			<div class="shopsList">
			@foreach( $shops as $shop )
				<div class="col-md-6">					
						<div class="pb-1"><strong>{{ $shop->name }}</strong></div>
						<div class="">
							<i class="fa fa-map icon"></i>
							{{ $shop->address }}
						</div>
						<div class="">
							<i class="fa fa-phone icon"></i>
							{{ $shop->phone }}
						</div>
	
					</div>
				@endforeach
			</div>
			
	</div>
	--->
	</section>

		<section class="product-statement mt-4 mt-sm-0">
			<div class="container">
				<ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
					<li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
					<li>@lang('site.product_support_footer_1')</li>
					<li>@lang('site.product_support_footer_2')</li>
					<li>@lang('site.product_support_footer_3')</li>
					<li>@lang('site.product_support_footer_4')</li>
				</ul>

			</div>
		</section>

		<div class="gotop-wrap">
			<button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
		</div>

	</main>

@endsection

@section('js')

	<script>
		var infowindows = [];
		var markers = [];

		function initMap() {
			var uluru = {lat: 22.313144, lng: 114.219235};
			var map = new google.maps.Map(document.getElementById('gmap-embed'), {
				zoom: 17,
				center: uluru
			});

			setMarkers(map);

			initCardRowEvent(map);




//
//            // Try HTML5 geolocation.
//            if (navigator.geolocation) {
//                navigator.geolocation.getCurrentPosition(function(position) {
//                    var pos = {
//                        lat: position.coords.latitude,
//                        lng: position.coords.longitude
//                    };
//
////                    infoWindow.setPosition(pos);
////                    infoWindow.setContent('Location found.');
//                    map.setCenter(pos);
//                }, function() {
//
//                    console.log("The geolocation service failed");
//
//                });
//            } else {
//                console.log("Your browser doesn\'t support geolocation");
//            }

		}


		function setMarkers( map ){


			$('.shop-row').each( function(index, element) {


				var name = $(element).find('.shop-name').text();
				var lat = $(element).data('latitude');
				var lng = $(element).data('longitude');
				var address = $(element).find('.shop-address').text();
				var phone = $(element).find('.shop-phone').text();

				var marker = new google.maps.Marker({
					map: map, title: name , position:  new google.maps.LatLng(lat, lng)
				});
				marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
				markers.push(marker);

				map.setCenter(marker.getPosition());

				var content = "<b> " + name +  '</b><br>' + address + '<br>' + phone;

				var infowindow = new google.maps.InfoWindow;
				infowindow.setContent(content);
				infowindows.push(infowindow);


				google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
					return function() {
						if (infowindow) {
							infowindows.forEach(closeInfowindow);
						}

						marker.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png')
						infowindow.open(map,marker);
					};
				})(marker,content,infowindow));


			});


		}

		function initCardRowEvent(map) {


			$('.shop-row').click(function( e ) {

				var lat = $(this).data('latitude');
				var lng = $(this).data('longitude');

				var shopLatLng = new google.maps.LatLng(lat, lng);


				for (var i = 0; i < markers.length; i++) {
					var marker = markers[i];

					var mapLatLng = markers[i].getPosition( );

					if( mapLatLng.equals(shopLatLng)) {
						new google.maps.event.trigger( marker, 'click' );
						break;
					}
				}

				map.panTo( shopLatLng ) ;



			})

		}

		function closeInfowindow(item, index){
			infowindows[index].close();
			markers[index].setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png')
		}

		function resize_shop_list_bar( ) {

			// Get avita support us google map.
			var map_height = $( ".map-wrap" ).height();

			$('.shop-list').css('height', map_height - $('.shop-list').offset() );

		}

		$(document).ready(function(){

			$("#map-search").change(function(e){

				var search_term = $(this).val();

				$('.shop-row').each(function(index, item) {

					var search = new RegExp(search_term , "i");

					var title = $(item).find(".shop-name").text();

					if ( title.match(search) ) {
						$(item).css("display", "");
					} else {
						$(item).css("display", "none");
					}
				});

			});


			$( window ).resize(function() {

				resize_shop_list_bar();
			});

			resize_shop_list_bar();

		});


	</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL2du53CNS9kfAQ1itk4kwF4aSBSjIgHE&callback=initMap"> </script>

@endsection
