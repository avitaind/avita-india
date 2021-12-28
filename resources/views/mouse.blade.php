@extends('layouts.app')

@section('title')
    @lang('title.Accessories')
@stop


@section('content')
    <main class="top-nav-padding">

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/website_mouse_banner.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/mobile_mouse_banner.jpg')"></div>
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
 
        <section class="product-liber-computer ls-0" id="test"  style="background-color:#fff;">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                       <!--   <div class="admiror_h1">COMING SOON</div>
                      <span class="buy-now2"> COMING SOON</span> --->
                        </div>
                      
                            <div class="banner-para text-center">
                            <span class="d-lg-block">
                            <span class="buy-now2"><a href="https://in.nexstmall.com/" target="_blank">Buy now ></a></span>
                            <!--- <a href="/where-to-buy" style="color:#09F">Where to buy ></a> --->
                            </span>
                        </div>
                       
                        <div class="space60"></div>
                    </div>
                </div>
        </section>




        <section class="product-liber-performance2 ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/mouse/sc8_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/mouse/sc8_fimg1.jpg">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">A Feast to Eyes &amp; Ears</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry </span>
                            <span class="d-md-block">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                            <span class="d-md-block">when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>
                            <span class="d-lg-block">Its inbuilt speaker is also good at </span>
                            <span class="d-lg-block">delivering stunning sound effects as it has </span>
                            <span class="d-lg-block">a wide dynamic range and strong bass. </span>
                            <span class="d-lg-block">No matter it is for work or entertainment to go, </span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/mouse/sc8_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/mouse/sc8_fimg1.jpg">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Built to be Secured</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

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
                        <div class="h2 banner-header mb-4 mb-sm-5">Seamless Efficiency</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry </span>
                            <span class="d-md-block">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                            <span class="d-md-block">when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-port1 ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-4" src="/images/mouse/sc8_fimg1.jpg">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-4" style="" src="/images/mouse/sc8_fimg1.jpg">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Built to be Secured</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <div class="space60"></div>
        <div class="space60"></div>
        <div class="space60"></div>




        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/mouse.css') }}"/>
@endsection

@section('js')

<script type="text/javascript" src="{{ asset('js/mouse.js') }}"></script>


@endsection
