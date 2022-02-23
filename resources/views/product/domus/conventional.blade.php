@extends('layouts.app')

@section('title')
    @lang('title.DOMUS_home')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/conventional.css') }}" />
@endsection
@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.min.js"></script>
    <script src="{{ asset('js/conventional.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js"></script>

@endsection
@section('content')

    <div class="space">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/domus/img/conventional_banner_1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/domus/img/conventional_banner_2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/domus/img/conventional_banner_3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div class="section section-1 row">

        <div class="box box-1 col-md-6">

            
        </div>
        <div class="box box-11 col-md-6">
                <span>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?</h3>
                </span>
        </div>
    </div>
    <div class="section section-1">

    <span>
        <h1>What is Lorem ipsum</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?
        </p>
    
    </span>

    </div>

    <div class="section section-2 row">
        <div class="box box-22 col-md-6">
            <span>
                
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?</h3>
            </span>
       </div>
        <div class="box box-2">

        </div>
    </div>

    <div class="section section-2">

        <span>
            <h1>What is Lorem ipsum</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?
            </p>
         </span>
    
    </div>


    <div class="section section-3 row">

        <div class="box box-3 col-md-6">

            
        </div>
        <div class="box box-33 col-md-6">
                <span>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem eum impedit magni, aperiam, eaque voluptate at aut tempore labore, laborum adipisci ea consequatur illo voluptates nulla veniam repellendus provident?</h3>
                </span>
        </div>
    </div>

@endsection
