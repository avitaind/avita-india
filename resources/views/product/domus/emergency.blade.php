@extends('layouts.app')

@section('title')
    @lang('title.DOMUS_home')
@stop
@section('css')

<link type="text/css" rel="stylesheet" href="{{ asset('css/emergency-domus.css') }}"/>

 {{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/> --}}
 {{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/avita-domus.css') }}"/> --}}

@endsection

@section('content')
<main>
<section class="product-liber-banner">
  <div class="responsive-block">
      <div class="banner-block responsive-item domus-banner">
          <div class="banner-bg hidden-sm-down" style="background-image: url('https://image.freepik.com/free-photo/interior-blank-photo-frame-living-room-with-white-sofa-3d-rendering_46483-504.jpg')"></div>
          <div class="banner-bg hidden-md-up" style="background-image: url('https://image.freepik.com/free-photo/interior-blank-photo-frame-living-room-with-white-sofa-3d-rendering_46483-504.jpg')"></div>
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

<section class="product-liber-wifi ls-0" style="min-height:50px;">
    <div class="banner-block">
        <div class="banner-bg"></div>
        <div class="banner-image">
            <img class="bc-computer-image bc-computer-2" src="/domus/img/example_bezier.png">
        </div>
        <div class="container">
            <div class="banner-info">
                <div class="ac-computer-wrap hidden-md-up">
                    <img class="ac-computer-image ac-computer-1" style="" src="/domus/img/example_bezier.png">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 
<section class="animation">
    <img class="paper-plane" id="my-sticky-element" src="/domus/img/example_bezier.png" alt="paper-plane">


</section> --}}
</main>

@endsection

@section('css')



@endsection

@section('js')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js" ></script>
<script type="text/javascript" href="{{ asset('js/avita-domus.js') }}"></script> --}}

<script type="text/javascript" src="{{ asset('js/emergency-domus.js') }}"></script>

<script type="text/javascript">

</script>

@endsection



