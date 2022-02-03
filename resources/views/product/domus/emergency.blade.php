@extends('layouts.app')

@section('title')
    @lang('title.DOMUS_home')
@stop
@section('css')

 <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
 <link type="text/css" rel="stylesheet" href="{{ asset('css/avita-domus.css') }}"/>

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


<section class="animation">
    <img class="paper-plane" id="my-sticky-element" src="/domus/img/example_bezier.png" alt="paper-plane">


</section>
</main>

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js" ></script>
<script type="text/javascript" href="{{ asset('js/avita-domus.js') }}"></script>


@endsection

@endsection

