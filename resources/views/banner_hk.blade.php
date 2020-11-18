<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
        

        <div class="carousel-item active">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-essential"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-essential"></div>
                    </div>
                </div>
            </div>
            
  
    <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-liber-v"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-liber-v"></div>
                    </div>
                </div>
            </div>

        <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-admiror"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-admiror"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-pura"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-pura"></div>
                    </div>
                </div>
            </div>

        <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-magus"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-magus"></div>
                    </div>
                </div>
            </div>

      
            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                            <div class="banner-bg hidden-sm-down banner-web-warranty"></div>
                            <div class="banner-bg hidden-md-up banner-mob-warranty"></div>
                       </div>
                  </div>
            </div>
       
          <ol class="carousel-indicators">
           <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1"></li>
           <li data-target="#home_banner" data-slide-to="2"></li>
           <li data-target="#home_banner" data-slide-to="3"></li>
           <li data-target="#home_banner" data-slide-to="4"></li>
           <li data-target="#home_banner" data-slide-to="5"></li>

        </ol>
    </div>
  </div>       

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('js')
<script type="text/javascript">
        $(document).ready(function() {
    $('.carousel').carousel({
      interval: 8000
    });
  });
  
    </script>
@endsection
