@extends('layouts.app')
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

@section('title')
    @lang('title.DOMUS_home')
@stop

@section('content')

    <section class="top-nav-padding homepage-banner">
        <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="responsive-block">
                        <div class="banner-block responsive-item">
                            <div class="banner-bg hidden-sm-down banner-web-domus"></div>
                            <div class="banner-bg hidden-md-up banner-mob-domus"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color:#000">
        <div class="container" style="text-align:center;">
            <div class="space60"></div>
            <div class="banner-para">
                <div align="center" class="col-lg-12">
                    <span class="buy-now"><a href="https://in.nexstmall.com/">Buy Now</a></span>
                </div>
            </div>
        </div>
    </section>

@stop
@section('js')
    <script type="text/js" href="{{ asset('js/product-domus.js') }}"></script>

@endsection
@section('css')
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/product-domus.css') }}" /> --}}
@endsection
