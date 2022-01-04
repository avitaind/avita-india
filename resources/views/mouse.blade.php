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
 
        <section class=" ls-0" id="" >
            <div class="container">

                <div class="banner-info" style="max-width:100%;">
                    <div class="space60"></div>
                    
                    <div class="banner-para">
                        <span >A wireless mouse means no cord and no cord means no muss and fuss. It improves the functionality and makes every movement smooth and hassle-free. AVITA Ubique OMA-100, wireless mouse is available in a wide range of hues such as AVITA Purple, Ribon Egg Blue, Carbon Black, Rose Pink, and Mint Green. With OMA-100 you can sit anywhere in the room and can easily access the device. The compact and ergonomic design helps you to take the mouse to places and glide conveniently. It perfectly complements AVITA laptops and your voguish personality.</span>
                    </div>
                     <div class="space60"></div>

                    {{-- <span class="buy-now2"><a href="https://in.nexstmall.com/" target="_blank">Buy now ></a></span> --}}

                    <div class="space60"></div>

                </div>
            </div>
    </section>

    <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
        <div class="container">

            <div class="banner-info" style="max-width:100%;">
                <div class="space60"></div>
                <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Product features</div>
                <div class="banner-para">
                    <ul>
                        <li style="text-align: justify;"> <i class="fa fa-mouse" aria-hidden="true"></i> High precision optical tracking</li> 
                        <li style="text-align: justify;">Dextrous design</li>
                        <li style="text-align: justify;">Convenient plug & play</li>
                        <li style="text-align: justify;">Inaudible click</li>
                        <li style="text-align: justify;">Diminutive size </li>
                    </ul>
                </div>
                 <div class="space60"></div>
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
                        <div class="h2 banner-header mb-4 mb-sm-5">Scroll and glide in silence</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">Experience the same click feel but with lesser noise. Work in any surrounding you wish to without disturbing the fellow mates. The wide rubber scroll at the feet lets you glide freely in silence.</span>
                            {{-- <span class="d-md-block">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                            <span class="d-md-block">when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>
                            <span class="d-lg-block">Its inbuilt speaker is also good at </span>
                            <span class="d-lg-block">delivering stunning sound effects as it has </span>
                            <span class="d-lg-block">a wide dynamic range and strong bass. </span>
                            <span class="d-lg-block">No matter it is for work or entertainment to go, </span> --}}
                            
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
                        <div class="h2 banner-header mb-4 mb-sm-5">Contemporary, Sleek and Chic Design </div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">AVITA UBIQUE OMA-100 is beautifully fabricated to fit your curated lifestyle. It perfectly complements your desk set up and can be conveniently tossed in your bag to carry anywhere and everywhere.</span>

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
                        <div class="h2 banner-header mb-4 mb-sm-5">Come-at-able</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Plug and play from wherever your comfort and convenience demand. Sit at a couch, bed or desk AVITA Ubique OMA-100 glides with the same pace and accuracy in every situation. No lag up to the range of 8m. Smooth movements with high resolutions of 1000 dpi. </span>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


        <div class="space60"></div>
        <div class="space60"></div>
        <div class="space60"></div>



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
                        <div class="h2 banner-header mb-4 mb-sm-5">Convenient and mobile size</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">The multifaceted design of AVITA UBIQUE OMA-100 offers more comfort and ease. </span>
                            {{-- <span class="d-md-block">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                            <span class="d-md-block">when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>
                            <span class="d-lg-block">Its inbuilt speaker is also good at </span>
                            <span class="d-lg-block">delivering stunning sound effects as it has </span>
                            <span class="d-lg-block">a wide dynamic range and strong bass. </span>
                            <span class="d-lg-block">No matter it is for work or entertainment to go, </span> --}}
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>



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
