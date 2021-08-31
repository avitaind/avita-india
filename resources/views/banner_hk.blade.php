<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
<!---
--->
<div class="carousel-item active">
            <div class="responsive-block">
            <a href="https://promotion.avita.com/?utm_source=minisite&utm_medium=brandsite&utm_campaign=liveitup" target="_blank">

                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-liveitup"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-liveitup"></div>
                    </div>
                  </a>
            </div>
        </div> 
<div class="carousel-item">
            <div class="responsive-block">
                    <div class="banner-block responsive-item" controls>
                        
                        <div class="banner-bg hidden-sm-down banner-web-iamavita"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-iamavita"></div>
                    </div>
                
            </div>
        </div>

        <div class="carousel-item">
            <div class="responsive-block">
                    <div class="banner-block responsive-item" controls>
                        
                        <div class="banner-bg hidden-sm-down banner-web-iamavita-1"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-iamavita-1"></div>
                    </div>
                
            </div>
        </div>


      
 
          <ol class="carousel-indicators">
           <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1"></li>
           <li data-target="#home_banner" data-slide-to="2"></li>
      
        </ol>
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
