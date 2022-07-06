@extends('layouts.app')

@section('title')
    @lang('title.DOMUS_home')
@stop


@section('content')
    <main class="top-nav-padding">
        @include('partials.inverterDomus-product-navbar')


        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down"
                        style="background-image: url('/images/domus/Inverter/website_domus_Inverter_banner.png')"></div>
                    <div class="banner-bg hidden-md-up"
                        style="background-image: url('/images/domus/Inverter/mobile_domus_Inverter_banner.png')">
                    </div>
                </div>
            </div>
        </section>


        {{-- Section 1 Start --}}

        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
            <div class="container">

                <div class="banner-info" style="max-width:100%;">
                    <div class="space60"></div>
                    <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Say goodbye to blackouts
                        with Inverter LED Bulb</div>
                    <div class="banner-para">
                        <p style="text-align: justify;  text-align-last: center;">Unanticipated power outages are annoying, especially when you’re in the middle of something.
                            Consequently, it is vital to have lighting that can evacuate you from such a situation. AVITA
                            Inverter LED Bulb uses an independent power source and ensures it comes into effect even after
                            the power cuts off. It is essential for offices, public buildings, or any other space.  Experience lighting round-the-clock with the 9W/12W AVITA Inverter LED Bulb. It has a 2000/2200
                            mAh lithium-ion battery with a light backup of up to 4 hours through 8-10 hours for fully
                            charging.</p>
                            <span>
                           </span>
                    </div>
                    <div class="space60"></div>

                    {{-- <span class="buy-now2"><a href="https://in.nexstmall.com/" target="_blank">Buy now ></a></span> --}}

                    <div class="space60"></div>

                </div>
            </div>
        </section>

        {{-- Section 1 End --}}

        {{-- Section 2 Start --}}

        {{-- Mob --}}
        <section class="hidden-md-up">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/domus/Inverter/Power-backup-of-4-hours-web.png) top center no-repeat;">
                </div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left">
                            <div class="h2 banner-header mob-text-center">
                                <div class="" style="text-transform:uppercase; margin-top:50px;text-align: center; ">Rechargeable batteries with 4 hours of power backup</div>
                                <img src="/images/domus/Inverter/Power-backup-of-4-hours-100px.png"
                                    style="margin-top: 30px;margin-bottom: 30px;">
                            </div>
                            {{-- <div class="space60"></div> --}}
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/domus/Inverter/Power-backup-of-4-hours-mob.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">The Inverter LED bulb has a built-in rechargeable battery that charges automatically when the supply power is present. Once the power cuts off, the bulb stays on for 4 hours, leaving you unworried about living without light.</span>
                            </div>
                        </div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
        </section>

        {{-- Web --}}
        <section class="hidden-sm-down">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/domus/Inverter/Power-backup-of-4-hours-web.png) top center no-repeat;">
                </div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left" style="padding-left: 50px;">
                            <div class="h2 banner-header mob-text-center">
                                <div class="" style="text-transform:uppercase; margin-top:50px;text-align: center; ">Rechargeable batteries with 4 hours of power backup</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/domus/Inverter/Power-backup-of-4-hours-mob.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">The Inverter LED bulb has a built-in rechargeable battery that charges automatically when the supply power is present. Once the power cuts off, the bulb stays on for 4 hours, leaving you unworried about living without light.</span>
                            </div>
                            <img src="/images/domus/Inverter/Power-backup-of-4-hours-100px.png"
                                style="margin-top: 30px;margin-left:210px;">
                            <div class="row">
                                <div class="col-12 col-lg-6" align="">
                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left" style="margin-bottom: 50px;">
                                                <span class="badge-value"></span>
                                                <span class="badge-caption"></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-12 col-lg-6" align="">

                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left" style="margin-bottom: 57px;">
                                                <span class="badge-value"></span>
                                                <span class="badge-caption"></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space30 hidden-sm-down"></div>
                </div>
            </div>
        </section>

        {{-- Section 2 End --}}

        {{-- Section 3 Start --}}

        {{-- web --}}
        <section class="">
            <div class="banner-block ls-0 hidden-sm-down">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/domus/Inverter/Best-for-unanticipated-power-outages-web.png) top center no-repeat;">
                </div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row" style="margin-right: 100px; ">
                        <div class="col-12 col-lg-6" align="">
                            <div class="h2 banner-header mob-text-center">
                                <div class="" style="text-transform:uppercase;text-align: center; ">Works as a regular bulb until power cuts-off</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/domus/Inverter/Best-for-unanticipated-power-outages-mob.png"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">The Inverter LED bulb looks and works like a regular bulb but turns on impulsively after the electricity cuts off. You may never be able to tell the difference until the power goes out.</span>
                            </div>
                            <img src="/images/domus/Inverter/Best-for-unanticipated-power-outages-100px.png"
                                style="margin-top: 30px;margin-left: 190px;">
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                        </div>
                        <div class="col-12 col-lg-6" align="left"></div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>

            {{-- Mob --}}
            <div class="banner-block ls-0 ">
                <div class="banner-bg hidden-sm-down hidden-md-up"
                    style="background:url(/images/domus/Inverter/Best-for-unanticipated-power-outages-web.png) top center no-repeat;">
                </div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container hidden-md-up">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row hidden-md-up" style="">
                        <div class="col-12 col-lg-6" align="">
                            <div class="h2 banner-header mob-text-center">
                                <div class="" style="text-transform:uppercase; padding-top: 50px;">Works as a regular bulb until power cuts-off</div>
                                <img src="/images/domus/Inverter/Best-for-unanticipated-power-outages-100px.png"
                                    style="margin-top: 30px;margin-bottom: 30px;">
                            </div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/domus/Inverter/Best-for-unanticipated-power-outages-mob.png"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">The Inverter LED bulb looks and works like a regular bulb but turns on impulsively after the electricity cuts off. You may never be able to tell the difference until the power goes out.</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6" align="left"></div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
        </section>

        {{-- Section 3 End --}}

    

  



        {{-- Section 8 Start --}}

        {{-- Mob --}}
        <section class="hidden-md-up">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/domus/Inverter/Built-in-rechargeable-battery-web.png) top center no-repeat;">
                </div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left">
                            <div class="h2 banner-header mob-text-center">
                                <div class=""
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Saves energy and protects against overcharging</div>
                                <img src="/images/domus/Inverter/Best-for-unanticipated-power-outages-100px.png"
                                    style="margin-top: 30px;margin-bottom: 30px;">
                            </div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/domus/Inverter/Built-in-rechargeable-battery-mob.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Equipped with LED light beads that ensure the consumption of fewer lumens, the Inverter bulb also has built-in overcharging protection programmed to cut off the power supply once charged. Your savings will skyrocket.</span>
                            </div>
                        </div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
        </section>

        {{-- Web --}}
        <section class="hidden-sm-down">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/domus/Inverter/Built-in-rechargeable-battery-web.png) top center no-repeat;">
                </div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space30 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left" style="padding-left: 50px;">
                            <div class="h2 banner-header mob-text-center">
                                <div class=""
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Saves energy and protects against overcharging</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/domus/Inverter/Built-in-rechargeable-battery-mob.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Equipped with LED light beads that ensure the consumption of fewer lumens, the Inverter bulb also has built-in overcharging protection programmed to cut off the power supply once charged. Your savings will skyrocket.</span>
                            </div>
                            <img src="/images/domus/Inverter/Best-for-unanticipated-power-outages-100px.png"
                                style="margin-top: 30px;margin-left: 200px;">
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space30 hidden-sm-down"></div>
                        </div>
                    </div>
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                </div>
            </div>
        </section>

        {{-- Section 8 End --}}





    </main>

@endsection

@section('css')

    <link type="text/css" rel="stylesheet" href="{{ asset('css/emergency-domus.css') }}" />

    <style>
        span {
            text-align: justify;
            text-align-last: center;
        }

        @media (max-width: 575px) {
            .banner-para {
                text-align: justify !important;
                text-align-last: center;
            }

        }
    </style>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/emergency-domus.js') }}"></script>

@endsection