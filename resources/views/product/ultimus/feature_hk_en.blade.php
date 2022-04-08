@extends('layouts.app')

@section('title')
    @lang('title.ultimus_home')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.ultimus-product-navbar')
        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down"
                        style="background-image: url('/images/ultimus/web-banner-ultimus.jpg')"></div>
                    <div class="banner-bg hidden-md-up"
                        style="background-image: url('/images/ultimus/mob-banner-ultimus.jpg')"></div>
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
            <div class="container" style="padding-bottom: 40px;">

                <div class="banner-info" style="max-width:100%;">
                    <div class="space60"></div>
                    <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Built to delight</div>
                    <div class="banner-para">
                        <span>The newly-launched AVITA ULTIMUS, the first in its series SATUS, is crafted with precision and
                            equipped with all the essentials you need in a modern digital notebook. Create an engaging work
                            and wondrous play experience with SATUS ULTIMUS. An instant head-turner to help you move around
                            with flamboyance.</span>
                    </div>
                    <div class="space60 hidden-sm-down"></div>

                    {{-- <span class="buy-now2"><a href="https://in.nexstmall.com/" target="_blank">Buy now ></a></span> --}}
                    <div class="container">
                        <div class="card-deck">

                            <div class="card hidden-sm-down" style="border:none;background-color:#EEEEEE;">
                                <a class="" target="_blank" href="https://www.amazon.in/AVITA-SATUS-S111-NU14A1INC43PN-MB-35-81cms/dp/B09V73PJB8/">
                                    <img class="pt-3 w-25" src="/images/ultimus/AZ-logo.png" style="    margin-left: 30px;">
                                </a>
                            </div> &nbsp;

                            <div class="card hidden-md-up" style="border:none;background-color:#EEEEEE;">
                                <a class="" target="_blank" href="https://www.amazon.in/AVITA-SATUS-S111-NU14A1INC43PN-MB-35-81cms/dp/B09V73PJB8/">
                                    <img class="pt-3 w-50" src="/images/ultimus/AZ-logo.png">
                                </a>
                            </div> &nbsp;

                            {{-- <div class="card" style="border:none; background-color:#EEEEEE;">
                                <a class="" target="_blank"
                                    href="https://in.nexstmall.com/products/avita-satus-ultimus-s111-nu14a1inc43pn-mb-intel-gemini-lake-n4020-4gb-ram-128gb-ssd-matt-black">
                                    <img class="pt-2 w-75" src="/images/ultimus/Nexstgo_mall_logo.png">
                                </a>
                            </div> --}}

                            {{-- <div class="card" style="border:none;background-color:#EEEEEE;">
                                <a class="" target="_blank" href="#">
                                    <img class="w-50" src="/images/ultimus/FK-logo.png">
                                </a>
                            </div> --}}

                        </div>
                    </div>
                    {{-- <div class="space60"></div> --}}

                </div>
            </div>
        </section>

        <section class="">
            <div class="banner-block ls-0 hidden-sm-down">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg2_en.png) top center no-repeat;"></div>
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
                                <span class="d-lg-block">With high-quality x 2W speakers, now rest assured that everyone
                                    listens to you clearly without any disturbance. The powerful audio will make sure to
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
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
            <div class="banner-block ls-0 ">
                <div class="banner-bg hidden-sm-down hidden-md-up"
                    style="background:url(/images/ultimus/ultimus_bg2_en.png) top center no-repeat;"></div>
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
                                <div class="" style="text-transform:uppercase; padding-top: 50px;">Captivating
                                    Multimedia Experience</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg2_en_mo.jpg"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">With high-quality x 2W speakers, now rest assured that
                                    everyone
                                    listens to you clearly without any disturbance. The powerful audio will make sure to
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

        <section>
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg1_en.png) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    {{-- <div class="space30 hidden-sm-down"></div> --}}
                    <div class="row" style="    padding-bottom: 40px;">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left">
                            <div class="h2 banner-header mob-text-center">
                                <div class=""
                                    style="text-transform:uppercase;padding-top: 30px;text-align: center;">Seamless
                                    connectivity; Efficient Productivity</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg1_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Seamless connectivity is your pass for an uninterrupted work
                                    call or staying connected with family and friends. Multiple ports of SATUS ULTIMUS
                                    include 1 x USB2.0, 1 x USB3.0, and 1 x mini HDMI C Type that make you have a stable
                                    connection. Additionally, it connects faster with Bluetooth 4.0 version.</span>
                            </div>
                        </div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
        </section>

        <section class="product-liber-size ls-0" />
        <div class="banner-block">
            <div class="banner-bg"></div>
            <div class="banner-image">
                <img class="bc-computer-image bc-computer-1" src="/images/ultimus/sc3_fimg1.png"
                    style="right: 870px; height:500px;">
                <img class="bc-computer-image bc-computer-2" src="/images/ultimus/sc3_fimg2.png"
                    style="left: 800px; height:600px;">
                <img class="bc-computer-image bc-computer-3" src="/images/liber/liber_u_feature/sc3_fimg3.png">
                <img class="bc-computer-image bc-computer-4" src="/images/liber/liber_u_feature/sc3_fimg4.png">
                {{-- <img class="bc-computer-image bc-computer-5" src="/images/liber/liber_u_feature/sc3_fimg5.png"> --}}
                <img class="bc-computer-image bc-computer-6" src="/images/liber/liber_u_feature/sc3_fimg6.png">
                <img class="bc-computer-image bc-computer-7" src="/images/liber/liber_u_feature/sc3_fimg7.png">
                {{-- <img class="bc-computer-image bc-computer-8" src="/images/liber/liber_u_feature/sc3_fimg8.png"> --}}
            </div>
            <div class="container">
                <div class="banner-info">

                    <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;text-align: center;">Pick
                        from 6 Copious
                        Colours</div>
                    <div class="ac-computer-wrap hidden-md-up">
                        <img class="ac-computer-image ac-computer-1" style="" src="/images/ultimus/sc3_fimg2.png">
                    </div>
                    <div class="banner-para ls-0">
                        <span class="d-lg-block">In a world of blues and greys, ooze out vibrancy! Make a statement
                            each
                            time you step out as the new series 6 copious colours: Champagne Gold, Shamrock Green, Sugar
                            Red, Matt Black, Cloud Silver, and Space Grey.</span>
                        {{-- <span class="d-lg-block">Having no compromise to a silky metallic body </span>
                        <span class="d-lg-block">with the thinnest part of only 5mm and </span>
                        <span class="d-lg-block"> weight starting from 1.46kg (35.56 cm), </span>
                        <span class="d-lg-block">it comes with an ultra slim and light design </span>
                        <span class="d-lg-block">that unburdens you on the go.</span> --}}
                        <br>
                        {{-- <span><small>* Thinnest part</small></span> --}}
                    </div>

                </div>
            </div>
        </div>
        </section>

        <section class="hidden-md-up">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg6_en.png) top center no-repeat;"></div>
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
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Pre-loaded with
                                    the latest Windows 11</div>
                                    <img src="/images/ultimus/windows_11.png" style="width: 200px;padding-top: 20px;">
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg6_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Pre-Loaded with the latest Windows 11 Home that is web- and
                                    mobile-friendly. Its new user interface is simple and provides precise control over all
                                    elements, helping consumers to work more comfortably and efficiently.</span>
                            </div>



                        </div>


                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                    {{-- <div class="space60 hidden-sm-down"></div> --}}
                </div>
            </div>
        </section>

        <section class="hidden-sm-down">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg6_en.png) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left" style="margin-left: 630px;">
                            <div class="h2 banner-header mob-text-center">
                                <div class=""
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Pre-loaded with
                                    the latest Windows 11</div>
                                    <img src="/images/ultimus/windows_11.png" style="width: 310px;margin-left: 107px;padding-top: 20px;">

                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg6_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Pre-Loaded with the latest Windows 11 Home that is web- and
                                    mobile-friendly. Its new user interface is simple and provides precise control over all
                                    elements, helping consumers to work more comfortably and efficiently.</span>
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
        </section>

        {{-- Section 6 Start --}}

        <section class="product-liber-power ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/ultimus/sc5_fimg1.png">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-7">
                            <div class="banner-info  mx-auto">

                                <div class="h2 banner-header mb-4 mb-sm-5">
                                    <div class=" left" style="text-transform:uppercase;">All day Battery life
                                    </div>
                                </div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block" style="text-align-last: center;">The constant ping of a
                                        low battery is no more an issue
                                        now! Get used to non-stop work and entertainment with SATUS ULTIMUS. Up to 8
                                        hours* battery life of this laptop lets you work smoothly anytime of the day.</span>
                                    {{-- <span class="d-lg-block">through a hectic day of work to finally some entertainment before sleep, LIBER can stay cordless for up to 10 hours* </span>
                                    <span class="d-lg-block">to handle all of your daytime activities.</span> --}}
                                    {{-- <span class="d-lg-block"><small>*Up to 8 hours on MobileMark 2014 (Up to 10 hours
                                            in the condition of Wi-Fi, Bluetooth, audio are off, brightness as 20, and Power
                                            in Battery saver mode)</small></span> --}}
                                    <br />
                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/liber_u_feature/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">Up to <span class="badge-value px-1">8</span> hrs*<br>Battery
                                    life</div>
                            </div>
                            <div class="banner-data d-flex flex-wrap justify-content-center ls-0">
                                <div class="data-card">
                                    <div class="badge-caption">&nbsp;</div>
                                    <div class="badge-value text-center">7.4V<span class="badge-caption pl-1"></span>
                                    </div>
                                    {{-- <div class="badge-caption">5000mAH</div> --}}
                                    <div class="badge-caption">5000mAH battery</div>
                                </div>

                                <ul class="battery-block d-flex">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        {{-- Section 6 End --}}

        {{-- section 7 Start --}}

        <section class="product-liber-wifi product-ultimus-wifi ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-2" src="/images/ultimus/ultimus_product-1.png">
                </div>
                <div class="container">
                    <div class="banner-info ls-0" style="text-align:left; min-height:950px; width: 611px;">
                        <div class="h2 mob-text-center banner-header mb-4 mb-sm-5"
                            style="text-transform:uppercase;text-align: center; ">Processor </div>

                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style=""
                                src="/images/ultimus/ultimus_product.png">
                        </div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">This laptop has a lot more in store than you expect! The
                                magnificent performance of SATUS ULTIMUS gives you the power and a sense of reliability. It
                                is coupled with the high-speed Intel Celeron N4020 processor, 1.10 GHz base processor speed,
                                2.80 GHz Max speed, and 4 GB RAM to expedite your tasks. The high-speed processor is
                                complemented with the enormous storage capacity of 128 GB SSD to cure your storage
                                hindrances.</span>
                            <span class="d-lg-block"><a href="{{ route('product.spec', 'ultimus') }}"
                                    style="color:#09F">@lang('site.productnav_spec') ></a></span>
                        </div>

                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between"
                            style="margin-top:30px;">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Operating System</div>
                                <div class="badge-value">Windows 11</div>
                                <div class="badge-caption"><a
                                        href="https://support.microsoft.com/en-hk/help/4020089/windows-10-in-s-mode-faq"
                                        style="color:#09F" target="_blank">Know more ></a></div>
                            </div>
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                {{-- <div class="badge-caption">Up to</div> --}}
                                <div class="badge-value">N4020</div>
                                <div class="badge-caption">Intel&reg; Celeron&reg; Processor</div>
                            </div>
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                {{-- <div class="badge-caption">Up to</div> --}}
                                <div class="badge-value">128<span class="badge-caption pl-1">GB</span></div>
                                <div class="badge-caption">Expendable SSD</div>
                            </div>
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                {{-- <div class="badge-caption">Up to</div> --}}
                                <div class="badge-value">4<span class="badge-caption pl-1">GB</span></div>
                                <div class="badge-caption">RAM</div>
                            </div>

                        </div>
                    </div>

                    <div class="space60 hidden-sm-down"></div>

                </div>
            </div>
        </section>

        {{-- Section 7 End --}}

        {{-- Section 8 Start --}}

        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
            <div class="container">

                <div class="banner-info" style="max-width:100%;">
                    <div class="space60"></div>
                    <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Keyboard that Redefines
                        Comfort</div>
                    <div class="banner-para">
                        <span>The ergonomic keyboard of SATUS ULTIMUS minimizes muscle strain, fatigue, and other problems.
                            Its thoughtfully designed keyboard provides a seamless typing experience with maximum
                            convenience.</span>
                    </div>
                    <div class="space60"></div>

                    {{-- <span class="buy-now2"><a href="https://in.nexstmall.com/" target="_blank">Buy now ></a></span> --}}

                    <div class="space60"></div>

                </div>
            </div>
        </section>

        {{-- Section 8 End --}}

        {{-- Section 9 Start --}}

        <section class="hidden-md-up">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg3_en.png) top center no-repeat;"></div>
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
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">ultra thin &
                                    light</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg3_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">SATUS ULTIMUS proposes tangible portability. It is housed in a
                                    metallic chassis without compromising the thinness and lightweight. At merely, 16.9 mm
                                    thinness and weight just 1.3 kg*, it makes for a tremendously compatible companion for
                                    your hard-pressed adventures.</span>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-6" align="">

                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left" style="margin-bottom: 80px;">
                                                <span class="badge-value">1.3</span>
                                                <span class="badge-caption">kg*</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-12 col-lg-6" align="">

                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left" style="margin-bottom: 50px;">
                                                <span class="badge-value">16.9</span>
                                                <span class="badge-caption">mm thin</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
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

        <section class="hidden-sm-down">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg3_en.png) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left" style="padding-left: 50px;">
                            <div class="h2 banner-header mob-text-center">
                                <div class=""
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">ultra thin &
                                    light</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg3_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">SATUS ULTIMUS proposes tangible portability. It is housed in a
                                    metallic chassis without compromising the thinness and lightweight. At merely, 16.9 mm
                                    thinness and weight just 1.3 kg*, it makes for a tremendously compatible companion for
                                    your hard-pressed adventures.</span>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-6" align="">

                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left" style="margin-bottom: 50px;">
                                                <span class="badge-value">1.3</span>
                                                <span class="badge-caption">kg*</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-12 col-lg-6" align="">

                                    <section class="product-liber-wifi">
                                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                            <div class="data-card mx-3 text-left" style="margin-bottom: 50px;">
                                                <span class="badge-value">16.9</span>
                                                <span class="badge-caption">mm thin</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    {{-- <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div> --}}
                </div>
            </div>
        </section>

        {{-- Section 9 End --}}

        {{-- Section 10 Start --}}

        <section class="">
            <div class="banner-block ls-0 hidden-sm-down">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg10_en.png) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row" style="margin-right: 100px; ">
                        <div class="col-12 col-lg-6" align="">
                            <div class="h2 banner-header mob-text-center">
                                <div class="" style="text-transform:uppercase;text-align: center; ">Fanless
                                    design</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg10_en_mo.png"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Keep your laptop close to you. The Fanless design helps
                                    eliminate any heating issues whatsoever so you can enjoy working without any fuss. SATUS
                                    ULTIMUS is quiet, clean, reliable, and cool.</span>
                            </div>


                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>


                        </div>
                        <div class="col-12 col-lg-6" align="left"></div>
                    </div>
                    {{-- <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div> --}}
                </div>
            </div>
            <div class="banner-block ls-0 ">
                <div class="banner-bg hidden-sm-down hidden-md-up"
                    style="background:url(/images/ultimus/ultimus_bg10_en.png) top center no-repeat;"></div>
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
                                <div class="" style="text-transform:uppercase; padding-top: 50px;">Fanless
                                    design</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg10_en_mo.png"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Keep your laptop close to you. The Fanless design helps
                                    eliminate any heating issues whatsoever so you can enjoy working without any fuss. SATUS
                                    ULTIMUS is quiet, clean, reliable, and cool.</span>
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

        {{-- Section 10 End --}}

        {{-- Section 11 Start --}}

        <section class="hidden-md-up">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg7_en.png) top center no-repeat;"></div>
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
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Lightning Fast
                                    SSD</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg7_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Experience speed with the expandable 128 GB SSD that provides
                                    faster and more efficient alternative to the HDDs.</span>
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

        <section class="hidden-sm-down">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg7_en.png) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left" style="padding-left: 50px;">
                            <div class="h2 banner-header mob-text-center">
                                <div class=""
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Lightning Fast
                                    SSD</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg7_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Experience speed with the expandable 128 GB SSD that provides
                                    faster and more efficient alternative to the HDDs.</span>
                            </div>

                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>


                        </div>


                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    {{-- <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div> --}}
                </div>
            </div>
        </section>

        {{-- Section 11 End --}}

        {{-- Section 12 Start --}}

        <section class="">
            <div class="banner-block ls-0 hidden-sm-down">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg8_en.png) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row" style="margin-right: 100px; ">
                        <div class="col-12 col-lg-6" align="">
                            <div class="h2 banner-header mob-text-center">
                                <div class="" style="text-transform:uppercase;text-align: center; ">Link your
                                    PC & Phone</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg8_en_mo.png"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Connect your laptop & phone through Windows 11’s Your Phone
                                    app. Access photos, make or receive phone calls, and send or take text messages on your
                                    PC.</span>
                            </div>

                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>


                        </div>
                        <div class="col-12 col-lg-6" align="left"></div>
                    </div>
                    {{-- <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div> --}}
                </div>
            </div>
            <div class="banner-block ls-0 ">
                <div class="banner-bg hidden-sm-down hidden-md-up"
                    style="background:url(/images/ultimus/ultimus_bg8_en.png) top center no-repeat;"></div>
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
                                <div class="" style="text-transform:uppercase; padding-top: 50px;">Link your
                                    PC & Phone</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg8_en_mo.png"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Connect your laptop & phone through Windows 11’s Your Phone
                                    app. Access photos, make or receive phone calls, and send or take text messages on your
                                    PC.</span>
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

        {{-- Section 12 End --}}

        {{-- Section 13 Start --}}

        <section class="hidden-md-up">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg9_en.png) top center no-repeat;"></div>
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
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Mesmerizing FHD
                                    Display </div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg9_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Give a wider perspective to work and play with the mesmerizing
                                    14.1 FHD anti-glare display of SATUS ULTIMUS. Indulge in the best viewing experience
                                    with
                                    a Full HD 1920 x 1080p resolution.</span>
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

        <section class="hidden-sm-down">
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg9_en.png) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left" style="padding-left: 50px;">
                            <div class="h2 banner-header mob-text-center">
                                <div class=""
                                    style="text-transform:uppercase; margin-top:50px;text-align: center; ">Mesmerizing FHD
                                    Display </div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg9_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">Give a wider perspective to work and play with the mesmerizing
                                    14.1 FHD anti-glare display of SATUS ULTIMUS. Indulge in the best viewing experience
                                    with
                                    a Full HD 1920 x 1080p resolution.</span>
                            </div>

                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>
                            <div class="space60 hidden-sm-down"></div>



                        </div>


                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    {{-- <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div> --}}
                </div>
            </div>
        </section>

        {{-- Section 13 End --}}

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                    <li>Windows 11 Home works exclusively with apps from the Microsoft Store within Windows and
                        accessories that are compatible with Windows 10 Home in S mode. A one-way switch out of S mode is
                        available. Learn more at <a
                            href="https://support.microsoft.com/en-gb/windows/windows-10-and-windows-11-in-s-mode-faq-851057d6-1ee9-b9e5-c30b-93baebeebc85#WindowsVersion=Windows_11"
                            target="_blank"><u>Windows.com/SmodeFAQ</u></a>.</li>
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel
                        Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon,
                        and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or
                        retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display
                        setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the
                        rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States
                        and/or other countries.</li>
                    <li>*Under Test Conditions</li>
                    <li>"Microsoft" "Your Phone" and "Your Phone Companion" are trademarks of the Microsoft group of companies in the US and/or other countries</li>
                </ul>
            </div>
        </section>

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
                text-align: justify!important;
            }

        }

    </style>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-ultimus.css') }}" />
@endsection

@section('js')

    {{-- <script type="text/javascript" src="{{ asset('js/pura.js') }}"></script> --}}

    <script type="text/javascript" src="{{ asset('js/ultimus.js') }}"></script>



@endsection
