@extends('layouts.app')

@section('title')
    @lang('title.LIBER_v_home')
@stop

@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_hk_en.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_hk_en_mo.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber-v/brand.png">--}}
                        </div>
                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
         <section class="product-liber-computer ls-0" id="test" style="background-color:#ebf3f5;">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                        	<div class="h2 banner-header">AVAILABLE NOW</div>
                        </div>
                        <div class="banner-para text-center">
                            <span class="d-lg-block">
                            <a href="https://www.nexstmall.com/products/avita-liber-v-14?utm_source=brandsite_medium=overview_campaign=buynow" target="_blank" style="color:#09F">Buy now ></a>&nbsp;&nbsp; 
                            <a href="{{ route('product.map', 'liber-v') }}" style="color:#09F">Where to buy ></a>
                            </span>
                        </div>
                        <div class="space60"></div>
                    </div>
                </div>
        </section>
        

        <section class="product-liber-computer product-liber-v-computer">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="container">
                
                    <div class="banner-info">
                    	<div class="h1 banner-header mb-4 mb-sm-5">Post-modern inspired design</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Taking "Limitless Evolution" as its concept, LIBER V's design is inspired by the creativity of the avant-garde post-modern fortress La Muralla Roja in Spain. LIBER V installs its high-quality webcam out of the screen with neat geometric lines, perfectly interprets the epistemology of geometry. Paired with the vibrant color options of LIBER V, the geometric chassis realizes a slimmer body and an easy-to-open clip, thereby offering a new interpretation of design in laptop fashion.</span> 
                        </div> 
                    </div>
                    
                    <div class="banner-image">
                    	<img class="bc-computer-image bc-computer-1" src="/images/liber-v/LiberV_14colors_hk_en.png">
                    </div>
                    
                </div>
            </div>
        </section>
        
        
         
         
         <section class="product-liber-banner product-liber-v-banner">
            <div class="responsive-block"> 
                <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_en.jpg')"></div>
                <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber-v/AVITA_liber_v_banner_v2_hk_en_mo.jpg')"></div> 
            </div>
        </section>
 
         
        
        
        
        <section class="product-liber-wifi product-liber-v-view">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image"> 
	                <img class="bc-computer-image fade-img-1" src="/images/liber-v/Features_hk_en.png"> 
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p03.png"> 
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="h1 banner-header mb-4 mb-sm-5">Incredible Viewing Experience</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">Slimmer but greater. The LIBER V series has a 3.7mm unbound ultra-narrow bezel which has been reduced by about 63% compared with previous LIBER series notebooks, one step closer to perfection with its 78.2% screen-to-body ratio. With a full HD 16:9 IPS display with anti-glare, presenting detailed images clearly with a stable response time under various ambient indoor and outdoor lighting conditions, allowing you to enjoy the LIBER V's big world with the ultra-wide viewing angle of 178 degrees. Whether you are studying, working, or simply having fun, LIBER V brings you an extraordinary viewing experience that you have never seen.</span> 
                        </div> 
                    </div>

                </div>
            </div>
        </section>
          
        <section class="product-liber-performance product-liber-v-color">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image"> 
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_all.png"> 
	                <img class="bc-computer-image fade-img" src="/images/liber-v/p04.png"> 
                    <img class="bc-computer-image fade-img-2" src="/images/liber-v/p05.png"> 
                </div>
                <div class="container">
                    <div class="banner-info"> 
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Colorful Expression</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">Appealing to different style personalities, LIBER V debuts</span>
                            <span class="d-md-block">with over 14 distinguishably attractive colors. You can</span>
                            <span class="d-md-block">also customize your LIBER V with a laser engraving service,</span>
                            <span class="d-md-block">engraving names or words onto the chassis to reflect your</span> 
                            <span class="d-md-block">unique personal statement, like a fashion accessory tailored</span>
                            <span class="d-md-block">just for you. You can fully release your personal charm</span>
                            <span class="d-md-block">and stand out from the crowd.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block"></span>
                            <p class="hidden-md-up">&nbsp;</p>
                            <span class="d-md-block">More color combinations will be coming soon to suit</span>
                            <span class="d-md-block">your every day needs. Whether you are a professional</span>
                            <span class="d-md-block">or a fashionista, LIBER V makes you shine even more.</span>
                            
                        </div>
                          
                    </div>
                     
                </div>
            </div>
        </section>
         
         
        
        
        
        <section class="product-liber-performance product-liber-v-screen" >
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_screen.jpg"> 
                </div>
                <div class="container">
                    <div class="banner-info" style="background-image:none;">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_screen.jpg">  
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Readily Portable</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">LIBER V is sophisticatedly engineered by compacting</span>
                            <span class="d-md-block">a 14-inch screen inside the 13.3-inch that weights</span>
                            <span class="d-md-block">from just 1.28kg, 14% less than previous models and</span>
                            <span class="d-md-block">well-balancing lightness and durability, bringing you</span>
                            <span class="d-md-block">an easy and convenient experience. LIBER V incorporates</span>
                            <span class="d-md-block">a Windows Hello fingerprint reader, which strengthens</span>
                            <span class="d-md-block">privacy protection. LIBER V can always accompany you</span>
                            <span class="d-md-block">while traveling or working effortlessly.</span>
                        </div>
                        <div class="banner-data d-flex flex-wrap text-left mx-auto pl-sm-5">
                        	
		                    <img class="bc-computer-image bc-computer-2" src="/images/liber-v/FaceUnlock.png">
                            
                            <div class="data-card data-card-1 col-6 my-2 my-sm-4 px-0 pr-1 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">15.9</div>mm
                                </div>
                                <div class="badge-caption">Thin</div>
                            </div>
                            <div class="data-card data-card-2 col-6 my-2 my-sm-4 px-0 px-sm-3">
                               
                            </div> 
                            <div class="data-card data-card-4 col-6 my-2 my-sm-4 px-0 px-sm-3">
                                <div class="badge-caption pb-1">
                                    <div class="badge-value d-inline pr-1">1.28</div>kg
                                </div>
                                <div class="badge-caption">14-inch weight</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
         <section class="product-liber-performance product-liber-v-performance" >
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber-v/AVITA_liber_v_performance.jpg"> 
	                <img class="bc-computer-image fade-img" src="/images/liber-v/p02_hk_en.png"> 
                </div>
                <div class="container">
                    <div class="banner-info" style="background-image:none;">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/liber-v/AVITA_liber_v_performance.jpg">
                        </div>
                        <div class="h1 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Extraordinary Performance and Productivity</div></div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">Not only LIBER V is unique in appearance but also in </span>
                            <span class="d-md-block">performance. Adapting the new 10th Gen Intel® Core™</span>
                            <span class="d-md-block">i5-10210U/i7-10510U processors, 8GB RAM and large storage</span>
                            <span class="d-md-block"> up to 1TB SSD, LIBER V can swiftly process and access files,</span>
                            <span class="d-md-block">allowing you to work with ease, even with complex workflows.</span>
                            <span class="d-md-block">&nbsp;</span>
                            <span class="d-md-block">LIBER V’s full-size backlit keyboard with 1.5mm key</span>
                            <span class="d-md-block">travel and 19mm key pitch delivers the ultimate word</span>
                            <span class="d-md-block">processing experience that you could ever ask for.</span>
                            <span class="d-md-block">Along with AVITA’s extra-large touchpad, support</span>
                            <span class="d-md-block">for 4 fingers gestures perfectly, you can have more</span>
                            <span class="d-md-block">space to control. LIBER V’s battery life lasts for</span>
                            <span class="d-md-block">up to 10 hours whilst the notebook is equipped</span>
                            <span class="d-md-block">with different ports that are compatible with other</span>
                            <span class="d-md-block">devices. Making it possible to simultaneously charge,</span>
                            <span class="d-md-block">transfer data, display, and connect to various</span>
                            <span class="d-md-block">devices to meet your different needs.</span> 
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                                
                                <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Operating System</div>
                                    <div class="badge-value">Windows 10 Home</div>
                                </div>
                                <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">Core i7</div>
                                    <div class="badge-caption">10th Gen INTEL® CORE™ PROCESSOR</div>
                                </div>
                               
                                <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">8<span class="badge-caption">GB</span></div>
                                    <div class="badge-caption">RAM</div>
                                </div>
                                 <div class="data-card my-3 text-left">
                                    <div class="badge-caption">Up to</div>
                                    <div class="badge-value">1<span class="badge-caption">TB</span></div>
                                    <div class="badge-caption">SSD</div>
                                </div>
                                
                                 <div class="data-card my-3 text-left data-card-mo1 hidden-md-up"> 
                                    <div class="badge-value">1.5<span class="badge-caption">mm</span></div>
                                    <div class="badge-caption">key travel</div>
                                </div>
                                <div class="data-card my-3 text-left data-card-mo2 hidden-md-up" style="margin-right: -20px;"> 
                                    <div class="badge-value">19<span class="badge-caption">mm</span></div>
                                    <div class="badge-caption">key pitch</div>
                                </div>
                                 
                                   
                                
                             
                             </div>
                              <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between hidden-sm-down" style="margin-top:0px;">
                              
                              
                             <div class="data-card my-3 text-left hidden-sm-down" style="padding-right: 100px;"> 
                                <div class="banner-header" style="font-size:1.5rem; opacity:0;">全尺寸背光鍵盤<br/>特大觸控板<br/>支援四指觸控</div>
                            </div> 
                              
                            <div class="data-card my-3 text-left"> 
                                <div class="badge-value">1.5<span class="badge-caption">mm</span></div>
                                <div class="badge-caption">key travel</div>
                            </div>
                            <div class="data-card my-3 text-left" style="margin-right: -20px;"> 
                                <div class="badge-value">19<span class="badge-caption">mm</span></div>
                                <div class="badge-caption">key pitch</div>
                            </div>
                             
                               
                            
                        </div> 
                    </div>
                </div>
            </div>
        </section>
         
         <section class="product-liber-performance product-liber-v-io">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-1" src="/images/liber-v/AVITA_liber_v_io.png">  
                </div> 
            </div>
         </section>
 
        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                     <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
