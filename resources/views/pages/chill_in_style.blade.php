@extends('layouts.app')

@section('title')
    @lang('title.about_us')
@stop

    
@section('content')

<div class="an-scroll-wrap"></div>
{{--  Section 1 Admiror   --}}

<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down" style="background-image: url('/images/admiror/banner_admiror_e.jpg')"></div>
                        <div class="banner-bg hidden-md-up" style="background-image: url('/images/admiror/banner_mob_admiror_e.jpg')"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>

{{--  Section 2 Pura  --}}

<section class=" homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down" style="background-image: url('/images/pura/pura_banner_web.jpg')"></div>
                        <div class="banner-bg hidden-md-up" style="background-image: url('/images/pura/pura_banner_mobile.jpg')"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>

{{--  Section 3 Pura E  --}}

<section class=" homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-PURA-E"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-PURA-E"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>

{{--  Section 4 Liber V  --}}

<section class=" homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-Liber-V"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Liber-V"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>

{{--  Section 5 Cosmos 2-in-1  --}}

<section class=" homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-Cosmos"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Cosmos"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>

{{--  Section 6 Magus Lite  --}}

<section class=" homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg" style="background-image: url('@lang('magus.img-banner1')')"></div>
                        <div class="banner-bg hidden-md-up" style="background-image: url('@lang('magus.img-banner2')')"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>

{{--  Section 7 Essential  --}}

<section class=" homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-Essential"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Essential"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>

{{--  Section 8 Liber  --}}

<section class=" homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down" style="background-image: url('/images/liber/liber_u_feature/banner.jpg')"></div>
                        <div class="banner-bg hidden-md-up" style="background-image: url('/images/liber/liber_u_feature/banner_mob.jpg')"></div>
                    </div>
                </a>
            </div>
          </div> 
        </div>
    </div>       
</section>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('js')
<script type="text/javascript">
        $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    });
  });
  
    </script>
@endsection


@endsection
