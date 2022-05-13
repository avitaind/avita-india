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

        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;"></section>

        {{-- Section 1 for Web --}}
        <section>
            <div class="hidden-sm-down ">
                <div class="banner-block ls-0">
                    {{-- <div class="banner-bg hidden-sm-down"
                        style="background:url(/images/ultimus/ultimus_bg6_en.png) top center no-repeat;">
                    </div> --}}
                    <div class="banner-bg hidden-sm-down">
                        <img src="/images/ultimus/ultimus_bg6_en.png" class="image" id="myimage" alt="Orisfina">
                    </div>
                    <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                    <div class="container">
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="row">
                            <div class="col-12 col-lg-6" align="left"></div>
                            <div class="col-12 col-lg-6" align="left" style="margin-left: 630px;">
                                <div class="h2 banner-header mob-text-center">
                                    <div class=" pb-4"
                                        style="text-transform:uppercase; margin-top:25px;text-align: center; ">
                                        Pre-loaded with
                                        the latest Windows 11</div>
                                    {{-- <img src="/images/ultimus/windows_11.png" onclick="changeBulbStateOff()"
                                        style="width: 310px;margin-left: 107px;padding-top: 20px;"> --}}
                                    <button class="bttn" onclick="changeBulbStateOff()"
                                        style="margin-left: 160px; ">Night</button>
                                    <button class="bttn" onclick="changeBulbState()">Day</button>

                                </div>
                                <div class="space60"></div>
                                <div class="ac-computer-wrap hidden-md-up">
                                    <img class="ac-computer-image ac-computer-2" style=""
                                        src="/images/ultimus/ultimus_bg6_en_mo.png">
                                </div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block">Pre-Loaded with the latest Windows 11 Home
                                        that is web- and
                                        mobile-friendly. Its new user interface is simple and provides
                                        precise control over all
                                        elements, helping consumers to work more comfortably and
                                        efficiently.</span>
                                </div>
                                <div class="space60 hidden-sm-down"></div>
                                <div class="space60 hidden-sm-down"></div>
                                <div class="space60 hidden-sm-down"></div>
                            </div>
                        </div>
                        <div class="space60 hidden-sm-down"></div>
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                    </div>
                </div>
            </div>

            {{-- Section for Mob --}}

            <div class="hidden-md-up">
                <div class="banner-block ls-0">
                    <div class="banner-bg hidden-sm-down"
                        style="background:url(/images/ultimus/ultimus_bg6_en.png) top center no-repeat;">
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
                                        style="text-transform:uppercase; margin-top:50px;text-align: center; ">
                                        Pre-loaded with
                                        the latest Windows 11</div>
                                    <img src="/images/ultimus/windows_11.png" style="width: 200px;padding-top: 20px;">
                                </div>
                                <div class="space60"></div>
                                <div class="ac-computer-wrap hidden-md-up">
                                    <img class="ac-computer-image ac-computer-2" style=""
                                        src="/images/ultimus/ultimus_bg6_en_mo.png">
                                </div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block">Pre-Loaded with the latest Windows 11 Home
                                        that is web- and
                                        mobile-friendly. Its new user interface is simple and provides
                                        precise control over all
                                        elements, helping consumers to work more comfortably and
                                        efficiently.</span>
                                </div>



                            </div>


                        </div>
                        <div class="space60 hidden-sm-down"></div>
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                    </div>
                </div>
            </div>
        </section>
        {{-- Section End --}}

        {{-- Section 2 for --}}
        <section class=" homepage-banner">
            <div id="hero_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="responsive-block">
                            <div class="banner-block responsive-item">
                                <div class="banner-bg hidden-sm-down banner-web-Ultimus"></div>
                                <div class="banner-bg hidden-md-up banner-mob-Ultimus"></div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="responsive-block">
                            <div class="banner-block responsive-item">
                                <div class="banner-bg hidden-sm-down banner-web-domus"></div>
                                <div class="banner-bg hidden-md-up banner-mob-domus"></div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item  ">
                        <div class="responsive-block">
                            <div class="banner-block responsive-item">
                                <div class="banner-bg hidden-sm-down banner-web-windows-11"></div>
                                <div class="banner-bg hidden-md-up banner-mob-windows-11"></div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="responsive-block">
                            <div class="banner-block responsive-item">
                                <div class="banner-bg hidden-sm-down banner-web-PURA-E"></div>
                                <div class="banner-bg hidden-md-up banner-mob-PURA-E"></div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="responsive-block">
                            <div class="banner-block responsive-item">
                                <div class="banner-bg hidden-sm-down banner-web-Sleeve-Bag"></div>
                                <div class="banner-bg hidden-md-up banner-mob-Sleeve-Bag"></div>
                            </div>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#hero_banner" data-slide-to="0" class="active"></li>
                        <li data-target="#hero_banner" data-slide-to="1"></li>
                        <li data-target="#hero_banner" data-slide-to="2"></li>
                        <li data-target="#hero_banner" data-slide-to="3"></li>
                        <li data-target="#hero_banner" data-slide-to="4"></li>
                    </ol>

                    <a class="carousel-control-prev" href="#hero_banner" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#hero_banner" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>

        </section>
        {{-- Section End --}}

        {{-- Section 3 for Web --}}
        <section class="">
            <div class="banner-block ls-0 hidden-sm-down">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg2_en.png) top center no-repeat;">
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
                                <div class="" style="text-transform:uppercase;text-align: center; ">
                                    Captivating Multimedia Experience</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg2_en_mo.jpg"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">With high-quality x 2W speakers, now rest
                                    assured that everyone
                                    listens to you clearly without any disturbance. The powerful audio
                                    will make sure to
                                    capture your every word.</span>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-6" align="">
                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left"
                                                style="margin-bottom: 50px;padding-top: 20px;">
                                                {{-- <div class="badge-caption">2 x 2 W</div> --}}
                                                <div class="badge-caption"> </div>
                                                <span class="badge-value" style="font-size: 2rem; ">Stereo
                                                    Speakers</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-12 col-lg-6" align="left">
                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left"
                                                style="margin-bottom: 40px; padding-top: 20px;">
                                                <span class="badge-value" style="font-size: 2rem;">Dual <br />Mic</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>


                        </div>
                        <div class="col-12 col-lg-6" align="left"></div>
                    </div>
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
            {{-- Section for Mob --}}

            <div class="banner-block ls-0 ">
                <div class="banner-bg hidden-sm-down hidden-md-up"
                    style="background:url(/images/ultimus/ultimus_bg2_en.png) top center no-repeat;">
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
                                <div class="" style="text-transform:uppercase; padding-top: 50px;">
                                    Captivating
                                    Multimedia Experience</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg2_en_mo.jpg"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">With high-quality x 2W speakers, now rest
                                    assured that
                                    everyone
                                    listens to you clearly without any disturbance. The powerful audio
                                    will make sure to
                                    capture your every word.</span>
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
        {{-- Section End --}}

        {{-- Section 4 for web & mob --}}
        <section class=" homepage-banner">
            <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="responsive-block">
                            <a href="">
                                <div class="banner-block responsive-item">
                                    <div class="banner-bg hidden-sm-down banner-web-Ultimus"></div>
                                    <div class="banner-bg hidden-md-up banner-mob-Ultimus"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Section End --}}

        {{-- Section 5 for Web --}}
        <section>
            <div class="hidden-sm-down ">
                <div class="banner-block ls-0">
                    {{-- <div class="banner-bg hidden-sm-down"
                        style="background:url(/images/ultimus/ultimus_bg6_en.png) top center no-repeat;">
                    </div> --}}
                    <div class="banner-bg hidden-sm-down">
                        <img src="/images/ultimus/ultimus_bg6_en.png" class="image" id="myimage" alt="Orisfina">
                    </div>
                    <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                    <div class="container">
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="row">
                            <div class="col-12 col-lg-6" align="left"></div>
                            <div class="col-12 col-lg-6" align="left" style="margin-left: 630px;">
                                <div class="h2 banner-header mob-text-center">
                                    <div class=" pb-4"
                                        style="text-transform:uppercase; margin-top:25px;text-align: center; ">
                                        Pre-loaded with
                                        the latest Windows 11</div>
                                    {{-- <img src="/images/ultimus/windows_11.png" onclick="changeBulbStateOff()"
                                        style="width: 310px;margin-left: 107px;padding-top: 20px;"> --}}
                                    <button class="bttn" onclick="changeBulbStateOff()"
                                        style="margin-left: 160px; ">Night</button>
                                    <button class="bttn" onclick="changeBulbState()">Day</button>

                                </div>
                                <div class="space60"></div>
                                <div class="ac-computer-wrap hidden-md-up">
                                    <img class="ac-computer-image ac-computer-2" style=""
                                        src="/images/ultimus/ultimus_bg6_en_mo.png">
                                </div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block">Pre-Loaded with the latest Windows 11 Home
                                        that is web- and
                                        mobile-friendly. Its new user interface is simple and provides
                                        precise control over all
                                        elements, helping consumers to work more comfortably and
                                        efficiently.</span>
                                </div>
                                <div class="space60 hidden-sm-down"></div>
                                <div class="space60 hidden-sm-down"></div>
                                <div class="space60 hidden-sm-down"></div>
                            </div>
                        </div>
                        <div class="space60 hidden-sm-down"></div>
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                    </div>
                </div>
            </div>

            {{-- Section for Mob --}}

            <div class="hidden-md-up">
                <div class="banner-block ls-0">
                    <div class="banner-bg hidden-sm-down"
                        style="background:url(/images/ultimus/ultimus_bg6_en.png) top center no-repeat;">
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
                                        style="text-transform:uppercase; margin-top:50px;text-align: center; ">
                                        Pre-loaded with
                                        the latest Windows 11</div>
                                    <img src="/images/ultimus/windows_11.png" style="width: 200px;padding-top: 20px;">
                                </div>
                                <div class="space60"></div>
                                <div class="ac-computer-wrap hidden-md-up">
                                    <img class="ac-computer-image ac-computer-2" style=""
                                        src="/images/ultimus/ultimus_bg6_en_mo.png">
                                </div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block">Pre-Loaded with the latest Windows 11 Home
                                        that is web- and
                                        mobile-friendly. Its new user interface is simple and provides
                                        precise control over all
                                        elements, helping consumers to work more comfortably and
                                        efficiently.</span>
                                </div>



                            </div>


                        </div>
                        <div class="space60 hidden-sm-down"></div>
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                        {{-- <div class="space60 hidden-sm-down"></div> --}}
                    </div>
                </div>
            </div>
        </section>
        {{-- Section End --}}

        {{-- Section 6 for Web --}}
        <section class="">
            <div class="banner-block ls-0 hidden-sm-down">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg2_en.png) top center no-repeat;">
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
                                <div class="" style="text-transform:uppercase;text-align: center; ">
                                    Captivating Multimedia Experience</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg2_en_mo.jpg"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">With high-quality x 2W speakers, now rest
                                    assured that everyone
                                    listens to you clearly without any disturbance. The powerful audio
                                    will make sure to
                                    capture your every word.</span>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-6" align="">
                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left"
                                                style="margin-bottom: 50px;padding-top: 20px;">
                                                {{-- <div class="badge-caption">2 x 2 W</div> --}}
                                                <div class="badge-caption"> </div>
                                                <span class="badge-value" style="font-size: 2rem; ">Stereo
                                                    Speakers</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-12 col-lg-6" align="left">
                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left"
                                                style="margin-bottom: 40px; padding-top: 20px;">
                                                <span class="badge-value" style="font-size: 2rem;">Dual <br />Mic</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>


                        </div>
                        <div class="col-12 col-lg-6" align="left"></div>
                    </div>
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
            {{-- Section for Mob --}}

            <div class="banner-block ls-0 ">
                <div class="banner-bg hidden-sm-down hidden-md-up"
                    style="background:url(/images/ultimus/ultimus_bg2_en.png) top center no-repeat;">
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
                                <div class="" style="text-transform:uppercase; padding-top: 50px;">
                                    Captivating
                                    Multimedia Experience</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg2_en_mo.jpg"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">With high-quality x 2W speakers, now rest
                                    assured that
                                    everyone
                                    listens to you clearly without any disturbance. The powerful audio
                                    will make sure to
                                    capture your every word.</span>
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
        {{-- Section End --}}

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection

@section('css')
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 6000
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


@endsection
