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
            <div class="container">

                <div class="banner-info" style="max-width:100%;">
                    <div class="space60"></div>
                    <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">A Treat to the Eyes!</div>
                    <div class="banner-para">
                        <span>SATUS ULTIMUS is the right balance of affordability and conventionality. The newly-launched
                            laptop is crafted with precision and is equipped with all the essentials you need in a digital
                            notebook. Create an engaging work and wondrous play experience with SATUS ULTIMUS that offers a
                            14 FHD, anti-glare display to indulge in the best viewing experience.</span>
                    </div>
                    <div class="space60"></div>

                    <span class="buy-now2"><a href="https://in.nexstmall.com/" target="_blank">Buy now ></a></span>

                    <div class="space60"></div>

                </div>
            </div>
        </section>

        <section>
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg1_en.jpg) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left">
                            <div class="h2 banner-header mob-text-center">
                                <div class="d-sm-inline" style="text-transform:uppercase;">Connectivity that Speaks</div>
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
                <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc3_fimg1.png"
                    style="right: 932px;">
                <img class="bc-computer-image bc-computer-2" src="/images/liber/liber_u_feature/sc3_fimg2.png">
                <img class="bc-computer-image bc-computer-3" src="/images/liber/liber_u_feature/sc3_fimg3.png">
                <img class="bc-computer-image bc-computer-4" src="/images/liber/liber_u_feature/sc3_fimg4.png">
                <img class="bc-computer-image bc-computer-5" src="/images/liber/liber_u_feature/sc3_fimg5.png">
                <img class="bc-computer-image bc-computer-6" src="/images/liber/liber_u_feature/sc3_fimg6.png">
                <img class="bc-computer-image bc-computer-7" src="/images/liber/liber_u_feature/sc3_fimg7.png">
                <img class="bc-computer-image bc-computer-8" src="/images/liber/liber_u_feature/sc3_fimg8.png">
            </div>
            <div class="container">
                <div class="banner-info">

                    <div class="h2 banner-header mb-4 mb-sm-5">Head-turning Colours</div>
                    <div class="ac-computer-wrap hidden-md-up">
                        <img class="ac-computer-image ac-computer-1" style=""
                            src="/images/liber/liber_u_feature/sc3_fimg2.png">
                    </div>
                    <div class="banner-para ls-0">
                        <span class="d-lg-block">In a world of blues and greys, ooze out vibrancy! Make a statement each
                            time you step out as the new series 6 copious colours: Champagne Gold, Shamrock Green, Sugar
                            Red, Matt Black, Cloud Silver, and Space Grey.</span>
                        {{-- <span class="d-lg-block">Having no compromise to a silky metallic body </span>
                        <span class="d-lg-block">with the thinnest part of only 5mm and </span>
                        <span class="d-lg-block"> weight starting from 1.46kg (35.56 cm), </span>
                        <span class="d-lg-block">it comes with an ultra slim and light design </span>
                        <span class="d-lg-block">that unburdens you on the go.</span> --}}
                        <br>
                        <span><small>* Thinnest part</small></span>
                    </div>
                    <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                        <div class="data-card data-card-1 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                            <span class="badge-value">5</span>
                            <span class="badge-caption">mm</span>
                            <div class="badge-caption pt-1">Thin</div>
                        </div>
                        <div class="data-card data-card-4 col-6 my-2 my-sm-4">
                            <div class="badge-caption">Starting from</div>
                            <span class="badge-value">1.3</span>
                            <span class="badge-caption">kg</span>
                            <div class="badge-caption pt-1">35.56 cm weight</div>
                        </div>
                        <div class="data-card data-card-2 col-6 my-2 my-sm-4">
                            {{-- <span class="badge-value">180</span>
                            <span style="font-size: 3rem; font-weight: 300;">&deg;</span>
                            <div class="badge-caption pt-1">Hinge</div> --}}
                        </div>

                        <div class="data-card data-card-3 col-6 my-2 my-sm-4 pl-1 px-sm-4">
                            {{-- <div class="badge-caption">Starting from</div>
                            <span class="badge-value">1.35</span>
                            <span class="badge-caption">kg</span>
                            <div  class="badge-caption pt-1">13.3-inch weight</div> --}}
                        </div>



                    </div>
                </div>
            </div>
        </div>
        </section>

        <section>
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg2_en.jpg) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left">
                            <div class="h2 banner-header mob-text-center">
                                <div class="d-sm-inline" style="text-transform:uppercase;">Sound that needs to be heard
                                </div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg2_en_mo.png"
                                    style="width: 700px;    margin-right: 150px;    margin-top: 200px;">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">With high-quality x 2W speakers, now rest assured that everyone
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

        <section class="product-liber-power ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/liber_u_feature/sc5_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="banner-info  mx-auto">

                                <div class="h2 banner-header mb-4 mb-sm-5">
                                    <div class="d-sm-inline">Ever-ready Battery</div>
                                </div>
                                <div class="banner-para ls-0">
                                    <span class="d-lg-block">The constant ping of a low battery is no more an issue
                                        now! Get used to non-stop work and entertainment with SATUS ULTIMUS. The up to 8
                                        hours battery life of this laptop lets you work smoothly anytime of the day.</span>
                                    {{-- <span class="d-lg-block">through a hectic day of work to finally some entertainment before sleep, LIBER can stay cordless for up to 10 hours* </span>
                                    <span class="d-lg-block">to handle all of your daytime activities.</span> --}}
                                    <span class="d-lg-block"><small>*Up to 8 hours on MobileMark 2014 (Up to 10 hours
                                            in the condition of Wi-Fi, Bluetooth, audio are off, brightness as 20, and Power
                                            in Battery saver mode)</small></span>
                                    <br />
                                </div>
                            </div>
                            <!-- <img class="ac-computer-image ac-computer-1" src="/images/liber/liber_u_feature/sc5_fimg1.jpg"> -->
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">Up to <span class="badge-value px-1">10</span> hrs*<br>Battery
                                    life</div>
                            </div>
                            <div class="banner-data d-flex flex-wrap justify-content-center ls-0">
                                <div class="data-card">
                                    <div class="badge-caption">&nbsp;</div>
                                    <div class="badge-value text-center">36.7<span class="badge-caption pl-1">Wh</span>
                                    </div>
                                    <div class="badge-caption">Li-polymer battery</div>
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

        <section class="product-liber-wifi ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-2" src="/images/ultimus/ultimus_product.png">
                </div>
                <div class="container">
                    <div class="banner-info ls-0" style="text-align:left; min-height:950px; width: 611px;">
                        <div class="h2 mob-text-center banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">
                            Keyboard that Screams Comfort</div>

                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style=""
                                src="/images/ultimus/ultimus_product.png">
                        </div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">The ergonomic keyboard of SATUS ULTIMUS minimizes muscle strain,
                                fatigue, and other problems. Its thoughtfully designed keyboard provides a seamless typing
                                experience with maximum convenience.</span>
                            <span class="d-lg-block"><a href="{{ route('product.spec', 'Ultimus') }}"
                                    style="color:#09F">@lang('site.productnav_spec') ></a></span>
                        </div>

                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between"
                            style="margin-top:30px;">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Operating System</div>
                                <div class="badge-value">Windows 11 in S Mode</div>
                                <div class="badge-caption"><a
                                        href="https://support.microsoft.com/en-hk/help/4020089/windows-10-in-s-mode-faq"
                                        style="color:#09F" target="_blank">Know more ></a></div>
                            </div>
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                {{-- <div class="badge-caption">Up to</div> --}}
                                <div class="badge-value">N4020</div>
                                <div class="badge-caption">INTEL&reg; Celeron&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 col-12 col-lg-6 text-left">
                                {{-- <div class="badge-caption">Up to</div> --}}
                                <div class="badge-value">128<span class="badge-caption pl-1">GB</span></div>
                                <div class="badge-caption">SSD</div>
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
        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
            <div class="container">

                <div class="banner-info" style="max-width:100%;">
                    <div class="space60"></div>
                    <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Impeccable Competence
                    </div>
                    <div class="banner-para">
                        <span>This laptop has a lot more in store than you expect! The magnificent performance of SATUS
                            ULTIMUS gives you the power and a sense of reliability. It is coupled with the high-speed Intel
                            Celeron N4020 processor, 1.10 GHz base processor speed, 2.80 GHz Max speed, and 4 GB RAM to
                            expedite your tasks. The high-speed processor is complemented with the enormous storage capacity
                            of 128 GB SSD to cure your storage hindrances.</span>
                    </div>
                    <div class="space60"></div>

                    {{-- <span class="buy-now2"><a href="https://in.nexstmall.com/" target="_blank">Buy now ></a></span> --}}

                    <div class="space60"></div>

                </div>
            </div>
        </section>

        <section>
            <div class="banner-block ls-0">
                <div class="banner-bg hidden-sm-down"
                    style="background:url(/images/ultimus/ultimus_bg3_en.jpg) top center no-repeat;"></div>
                <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="row">
                        <div class="col-12 col-lg-6" align="left"></div>
                        <div class="col-12 col-lg-6" align="left">
                            <div class="h2 banner-header mob-text-center">
                                <div class="d-sm-inline" style="text-transform:uppercase;">Unrivaled & Perceptible
                                    Mobility</div>
                            </div>
                            <div class="space60"></div>
                            <div class="ac-computer-wrap hidden-md-up">
                                <img class="ac-computer-image ac-computer-2" style=""
                                    src="/images/ultimus/ultimus_bg3_en_mo.png">
                            </div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block">SATUS ULTIMUS proposes tangible portability. It is housed in a
                                    metallic chassis without compromising the thinness and lightweight. At merely, 16.9 mm
                                    thinness and weight just 1.3 kg, it makes for a tremendously compatible companion for
                                    your hard-pressed adventures.</span>
                            </div>

                            <section class="product-liber-wifi">
                                <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                                    <div class="data-card mx-3 text-left">
                                        <span class="badge-value">1.3</span>
                                        <span class="badge-caption">kg</span>
                                        <div class="badge-caption">35.56 cm weight</div>
                                    </div>
                                </div>
                            </section>


                        </div>


                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
            </div>
        </section>

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                    <li>Windows 10 Home in S mode works exclusively with apps from the Microsoft Store within Windows and
                        accessories that are compatible with Windows 10 Home in S mode. A one-way switch out of S mode is
                        available. Learn more at <a href="https://Windows.com/SmodeFAQ"
                            target="_blank"><u>Windows.com/SmodeFAQ</u></a>. </li>
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
        }

    </style>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}" />
@endsection

@section('js')

    {{-- <script type="text/javascript" src="{{ asset('js/pura.js') }}"></script> --}}

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>



@endsection
