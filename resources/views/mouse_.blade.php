@extends('layouts.app')

@section('title')
    @lang('title.Accessories')
@stop


@section('content')

<main class="top-nav-padding">
{{-- @include('partials.rolling-cta') --}}

	{{-- <section class="">

        <img src="/images/modus/accessories.png" class="w-100 ">

    </section> --}}

    <section class="product-liber-wifi ls-0" style="min-height:550px;">
        <div class="banner-block">
            <div class="banner-bg"></div>
            <div class="banner-image">
                <img class="bc-computer-image bc-computer-2" src="/images/mouse/sc8_fimg1.jpg">
            </div>
            <div class="container">
                <div class="banner-info">
                    <div class="ac-computer-wrap hidden-md-up">
                        <img class="ac-computer-image ac-computer-1" style="" src="/images/mouse/sc8_fimg1.jpg">
                    </div>
                    <div class="h2 banner-header mb-4 mb-sm-5">Explore the right hues </div>
                    <div class="banner-para ls-0">
                        {{-- <span class="d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry </span>
                        <span class="d-md-block">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                        <span class="d-md-block">when an unknown printer took a galley of type and scrambled it to make a type specimen book</span> --}}
                        <span class="d-lg-block">Match the rest of your accessories with the AVITA Ubique OMA-100, available in a wide range of colors such as Purple, Ribon Egg Blue, Carbon Black, Rose Pink, and Mint Green.</span>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection


@section('css')
    
    
    <link type="text/css" rel="stylesheet" href="{{ asset('css/mouse.css') }}"/>
@endsection

@section('js')

<script type="text/javascript" src="{{ asset('js/mouse.js') }}"></script>


@endsection