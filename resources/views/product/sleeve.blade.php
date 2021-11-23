@extends('layouts.app')

@section('title')
    @lang('title.Accessories')
@stop
@section('css')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
</style>
<link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>

@endsection

@section('content')
{{--  @include('partials.rolling-cta')  --}}



<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          
          <div class="carousel-item active">
            <div class="responsive-block">
            {{--  <a href="https://bit.ly/3FoPUl0">  --}}
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-Sleeve-Bag"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Sleeve-Bag"></div>
                    </div>
                  </a>
            </div>
          </div> 
          
          <div class="carousel-item  ">
            <div class="responsive-block">
            <a href="{{ route('windows-11') }}"> 
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-windows-11"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-windows-11"></div>
                    </div>
                  </a>
            </div>
          </div> 

          <ol class="carousel-indicators">
           {{--  <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1"></li>  --}}
        </ol>
    </div>
  </div>       

</section>


<section>
    <div class="h2 banner-header">AVITA Ubique 3-in-1 sleeve </div>
    <div class=" container-fluid">
        <div class="row m-4">
            <div class="col-md-6">
                <img class=" center" src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:500px; height:500px;">
            </div>
            <div class="col-md-6">
                <div>
                    <p class="text-justify">An ideal laptop bag is one that keeps the device safe. It also acts as a style accessory and adds more to your personality. Our newly launched Avita Ubique 3-in-1 sleeve is designed to give safety to your laptop while making you look fabulous as you do it. </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Perfect fit for all your needs</h1>
    <div class=" container-fluid">
        <div class="row m-4">
            <div class="col-md-6">
                <p class="text-justify banner-para banner-para">As the name suggests, AVITA Ubique 3-in-1 is available in 3 different styles. While one can use this as a sling bag, it can also be arm candy and can be carried around easily. Last but not the least, the bag also acts as a laptop sleeve for days when you don't feel like twirling around with your bag. </p>
                
            </div>
            <div class="col-md-6">
                <div>
                <img class=" text-center"class=" center" src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:500px; height:500px;">
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Available in 4 colours</h1>
    <div class=" container-fluid">
        <div class="row m-4">
            <div class="col-md-6">
                <img class=" center" src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:500px; height:500px;">
            </div>
            <div class="col-md-6">
                <div>
                    <p class="text-justify banner-para">Pick your bag as per your mood! The versatile bag is available in 4 different shades namely blue, black, dark grey, and light grey.</p>
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Spacious interiors</h1>
    <div class=" container-fluid">
        <div class="row m-4">
            <div class="col-md-6">
                <p class="text-justify banner-para">What's even a bag that cannot hold all your essentials? AVITA Ubique 3-in-1 sleeve comes with spacious interiors to keep your belongings like charger, hard disks, notepad, pen, etc. Its 3 extra pockets give you easy access to take out smaller items. </p>
                
            </div>
            <div class="col-md-6">
                <div>
                <img class=" center" src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:500px; height:500px;">
                    
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Lightweight and comfortable </h1>
    <div class=" container-fluid">
        <div class="row m-4">
            <div class="col-md-6">
                <img class=" center" src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:500px; height:500px;">
            </div>
            <div class="col-md-6">
                <div>
                    <p class="text-justify banner-para">This lightweight build bag is easy to carry around. It is also equipped with cushioned laptop support for optimal comfort and safety. </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Waterproof coating </h1>
    <div class=" container-fluid">
        <div class="row m-4">
            <div class="col-md-6">
                <p class="text-justify banner-para">Made for all weather conditions. The durable PU-coated material makes the bag resistant to water.</p>
                
            </div>
            <div class="col-md-6">
                <div>
                <img class=" center" src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:500px; height:500px;">
                    
                </div>
            </div>
        </div>
    </div>

</section >


@endsection


