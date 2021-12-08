<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="responsive-block">
            <a href="https://avita-india.com/news/detail/12">
          
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-avita-5Year"></div>                   
                        <div class="banner-bg hidden-md-up banner-mob-avita-5Year"></div>
                    </div>
                  </a>
            </div>
          </div> 

          <div class="carousel-item ">
            <div class="responsive-block">
            <a href="https://bit.ly/3FoPUl0">
          
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-PURA-E"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-PURA-E"></div>
                    </div>
                  </a>
            </div>
          </div> 
          
          <div class="carousel-item ">
            <div class="responsive-block">
            <a href="https://amzn.to/3iydJ0f">
          
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-Cosmos"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Cosmos"></div>
                    </div>
                  </a>
            </div>
          </div> 

          <div class="carousel-item ">
            <div class="responsive-block">
            <a href="{{ route('product.overview', ['essential']) }}">
          
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-Essential"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Essential"></div>
                    </div>
                  </a>
            </div>
          </div> 
          
          <div class="carousel-item ">
            <div class="responsive-block">
            <a href="https://in.nexstmall.com/collections/laptop-sleeves" target="_blank">
          
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down banner-web-Sleeve-Bag"></div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Sleeve-Bag"></div>
                    </div>
                  </a>
            </div>
          </div>

          <div class="carousel-item ">
              <div class="responsive-block">
              <a href="https://bit.ly/3AondkR">
          
                      <div class="banner-block responsive-item">
                          <div class="banner-bg hidden-sm-down banner-web-Liber-V"></div>                  
                          <div class="banner-bg hidden-md-up banner-mob-Liber-V"></div>
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
           <li data-target="#home_banner" data-slide-to="0" class="active"></li>
           <li data-target="#home_banner" data-slide-to="1"></li>
           <li data-target="#home_banner" data-slide-to="2"></li>
           <li data-target="#home_banner" data-slide-to="3"></li>
           <li data-target="#home_banner" data-slide-to="4"></li>
           <li data-target="#home_banner" data-slide-to="5"></li>
           <li data-target="#home_banner" data-slide-to="6"></li>
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
