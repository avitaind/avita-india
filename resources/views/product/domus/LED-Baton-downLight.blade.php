@extends('layouts.app')

@section('title')
    @lang('title.LED-Baton-DownLight')
@stop

@section('content')
    <main class="top-nav-padding">

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down"
                        style="background-image: url('/images/ultimus/web-banner-ultimus.jpg')"></div>
                    <div class="banner-bg hidden-md-up"
                        style="background-image: url('/images/ultimus/mob-banner-ultimus.jpg')">
                    </div>
                    <div class="banner-info">
                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">

        </section>


        <div class="banner-block">
            <div class="container" style="width: ">
                <div align="center">

                    <section class="banner-anchor">
                        <div class="container">
                            <div class="row">
                                {{-- <div align="center" class="col-md-4">
                                    <a href="#LED">
                                        <img class="first" src='/images/admiror/btn_artistic_1.png' />
                                        <img class="hover" src='/images/admiror/btn_artistic_2.png' />
                                    </a>
                                </div>

                                <div align="center" class="col-md-4">
                                    <a href="#BATON">
                                        <img class="first" src='/images/admiror/btn_pride_1.png' />
                                        <img class="hover" src='/images/admiror/btn_pride_2.png' />
                                    </a>
                                </div>

                                <div align="center" class="col-md-4">
                                    <a href="#DOWN">
                                        <img class="first" src='/images/admiror/btn_outstanding_1.png' />
                                        <img class="hover" src='/images/admiror/btn_outstanding_2.png' />
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </section>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item col-md-4 " align="center">
                            <a class="nav-link active text-center" id="LED-tab" data-toggle="tab" href="#LED" role="tab"
                                aria-controls="LED" aria-selected="true">LED</a>
                        </li>
                        <li class="nav-item col-md-4 " align="center">
                            <a class="nav-link" id="BATON-tab" data-toggle="tab" href="#BATON" role="tab"
                                aria-controls="BATON" aria-selected="false">BATON</a>
                        </li>
                        <li class="nav-item col-md-4 " align="center">
                            <a class="nav-link" id="DOWN-tab" data-toggle="tab" href="#DOWN" role="tab"
                                aria-controls="DOWN" aria-selected="false">DOWN
                                Light</a>
                        </li>
                    </ul>

                    <section class="tab-content" id="myTabContent">
                        {{-- Tab 1 --}}
                        @include('product.domus.tab1')

                        {{-- Tab 2 --}}
                        @include('product.domus.tab2')

                        {{-- Tab 3 --}}
                        @include('product.domus.tab3')
                    </section>
                </div>
            </div>
        </div>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection

@section('css')
<style>
    span {
        text-align: justify;
        text-align-last: center;
    }

    @media (max-width: 575px) {
        .banner-para {
            text-align: justify !important;
        }

    }

</style>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-ultimus.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/ultimus.js') }}"></script>
    <script>
        var Bulbstate = 0;

        function changeBulbState() {
            switch (Bulbstate) {
                case 0:
                    document.getElementById("myimage").src = "/images/ultimus/ultimus_bg6_en.png";
                    Bulbstate = 0;
                    break;
                default:
                    document.getElementById("myimage").src = "/images/ultimus/ultimus_bg6_en.png";
                    Bulbstate = 0;
            }

        }

        function changeBulbStateOff() {
            switch (Bulbstate) {
                case 1:
                    document.getElementById("myimage").src = "/images/ultimus/ultimus_bg7_en.png";
                    Bulbstate = 1;
                    break;
                default:
                    document.getElementById("myimage").src = "/images/ultimus/ultimus_bg7_en.png";
                    Bulbstate = 1;
            }

        }
    </script>

@endsection
