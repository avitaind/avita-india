@extends('layouts.app')

@section('title')
    @lang('title.Accessories')
@stop


@section('content')
@include('partials.rolling-cta')



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
    <h1 class=" text-center m-4">Heading 1</h1>
    <div class=" container">
        <div class="row m-4">
            <div class="col-md-6">
                <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:300px; height:300px;">
            </div>
            <div class="col-md-6">
                <div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now  their model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, by accident, (injected humour and the like).</p>
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Heading 1</h1>
    <div class=" container">
        <div class="row m-4">
            <div class="col-md-6">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now  their model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, by accident, (injected humour and the like).</p>
                
            </div>
            <div class="col-md-6">
                <div>
                <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:300px; height:300px;">
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Heading 1</h1>
    <div class=" container">
        <div class="row m-4">
            <div class="col-md-6">
                <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:300px; height:300px;">
            </div>
            <div class="col-md-6">
                <div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now  their model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, by accident, (injected humour and the like).</p>
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Heading 1</h1>
    <div class=" container">
        <div class="row m-4">
            <div class="col-md-6">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now  their model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, by accident, (injected humour and the like).</p>
                
            </div>
            <div class="col-md-6">
                <div>
                <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:300px; height:300px;">
                    
                </div>
            </div>
        </div>
    </div>

    <h1 class=" text-center m-4">Heading 1</h1>
    <div class=" container">
        <div class="row m-4">
            <div class="col-md-6">
                <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:300px; height:300px;">
            </div>
            <div class="col-md-6">
                <div>
                    <p cla>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now  their model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, by accident, (injected humour and the like).</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
