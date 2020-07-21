@extends('layouts.app')

@section('title')
    @lang('title.service')
@stop
@section('css')
<style>
.shopsList {
    display: inline-table;
    width: 100%;
}
.shopsList .col-md-6:nth-child(2n+1) {
    clear: both;
}


.shopsList .col-md-6 {
    display: inline-grid;
    width: 50%;
    margin-bottom: 30px;
}

.shopsList .fa {
    font-size: 18px;
    weight:600;
}
</style>
@stop

@php

 $page = 'support';

@endphp

@section('content')
    <main>
    <section class="top-nav-padding support-search-section">


























    </section>

<div class="gotop-wrap">
    <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
</div>

    </main>

@endsection

@section('js')
    <script>
        function initMap() {

            // Get all lat lng

            $('.google_map').each(function( index, item ) {

                var data = $(item).data();

                var location = new google.maps.LatLng( data.lat, data.lng );

                var map = new google.maps.Map(item, {
                    zoom: 18,
                    maxZoom: 18,
                    minZoom: 18,
                    disableDefaultUI: true,
                    center: location,
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                });

            });

        }
    </script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL2du53CNS9kfAQ1itk4kwF4aSBSjIgHE&callback=initMap"></script>

    <script src="../js/support.js"></script>



@endsection
