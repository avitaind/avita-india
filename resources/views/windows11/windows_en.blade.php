@extends('layouts.app')

@section('title')
    @lang('Windows 11')
@stop

<style>
 
	 
	 
	section .icon{
		width: 350px;
	}
	 
	.banner-bg {		
		max-width: 100%;
	}
	
	.product-liber-banner .banner-block.responsive-item{
		opacity: 1 !important;
	}
	
	section.product-liber-v-color .banner-info{
		background-image: none;
	}
	
	 
	
	.txt-white{
		color: #fff;
	}
	
	section.bg_img{
		background-size: contain;
    	background-repeat: no-repeat;
		min-height: 900px;
	}
	
	a.btn,
	button.video-btn{		
		padding: 10px 15px;
		text-decoration: none;
		border: 1px solid #fff;
	}
	
	a.btn-whilte{		
		color: #fff !important;
		border: 1px solid #fff !important;
	}
	
	a.btn-whilte:hover{		
		color: #662d91 !important;
		background-color: #fff !important;
	}
	
	a.btn-black{		
		color: #000 !important;
		border: 1px solid #000 !important;
	}
	
	button.video-btn{		
		color: #000 !important;
		border: 1px solid #000 !important;
		background-color: #fff;
		text-transform: uppercase;
    	box-shadow: none !important;
	}
	
	
	a.btn-black:hover,
	button.video-btn:hover{		
		color: #fff !important;
		background-color: #000 !important;
	}
	
	
	a.play_video{
		position: absolute;
    	left: 45%;
    	top: 34%;
	}
	

	.modal-dialog {
		  max-width: 900px !important;
		  margin: 150px auto 0px !important;
	  }



	.modal-body {
	  position:relative;
	  padding:0px;
	}
	
	.close {
	  position:absolute;
	  right:-30px;
	  top:0;
	  z-index:999;
	  font-size:2rem;
	  font-weight: normal;
	  color:#fff;
	  opacity:1;
	}
	 
	
	
@media (min-width: 1025px){
	
	section.bg_img .col-12.col-lg-6 {
    	padding-top: 120px;
		padding-bottom: 120px;
	}
	
}
	
	
@media (min-width: 768px){
	
	.product-liber-banner .responsive-block:before{		
  		padding-top: 37% !important;
	}

	
	
}

	 

@media (max-width: 1024px){ 
	section.bg_img{		
    	min-height: 600px;
	}
	 
}

@media (max-width: 991px){ 
	 
	 
}
		
@media (max-width: 767px){ 
	  
	section.bg_img{		
    	background-image: none !important;		
    	min-height: auto;
	}
	
	.modal-body,
	.modal-dialog{		
    	padding: 7.5px !important;
	}
	
	
	.btn, .btn:hover, .btn:focus{
		min-width: auto !important;		
    	padding: 8px 12px !important;
	}
	   
}
	
			
@media (max-width: 340px){ 
	  
}
	
	
</style>

@section('content')
    <main class="top-nav-padding">
      
        <section class="bg_img" style="background-color:#662d91;background-image: url('/images/windows11/win11_feature_1_bg.png');background-position: center;background-size: contain;background-repeat: no-repeat;">
            <div class="container" >
                <div class="space60 hidden-sm-down"></div>
				<div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row">
					 
                	<div class="col-12  col-sm-6 col-lg-6 text-left txt-white" align="left">
						
						
						<div class="hidden-sm-up" >
							<img class="bc-computer-image wow fadeInUp" src="/images/windows11/win11_feature_1.png" >
						</div>
						
						<div class="mb-4">
							<img class="icon icon-window11" src="/images/windows11/windows11-logo-white.png">   
						</div>
						
						<div class="banner-para ls-0 mb-5 mb-sm-4 mob-text-center">
							<span class="d-lg-block">A new Windows experience, bringing you closer to the people and things you love.</span>
						 
						</div>
  
						
                    	<div class="h2 mb-4 mb-sm-4 mob-text-center">Get Ready Now</div>
				 
                        <div class="banner-para ls-0 mb-5 mb-sm-4 mob-text-center">
							<span class="d-lg-block">Shop for some Windows 10 PCs that can upgrade for free when Windows 11 rolls out.<sup>3</sup></span> 
						 
						</div> 
						
						<div class="banner-para ls-0 mb-5 mb-sm-4 mob-text-center">
							<a class="btn btn-whilte" href="https://in.nexstmall.com/" target="_blank" style="margin-right: 15px;">ACTION NOW</a> 
							
							{{--  <a class="btn btn-whilte" href="https://avita-india.com/news/detail/10" target="_blank">PRODUCT LIST</a> 
							  --}}
								<a class="btn btn-whilte" href="#">PRODUCT LIST</a> 

                   		</div> 
						
					</div>
					
					<div class="col-12  col-sm-6  col-lg-6" align="right">
						&nbsp; 
                	</div>
            </div> 
				
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
	 
          </div> 
        </section>
		
		
		
		
		
		
  
         
        <section class="bg_img" style="background-color:#fff;background-image: url('/images/windows11/win11_feature_2_bg.png');background-position: center;">
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row"> 
					
					<div class="col-12 col-sm-6  col-lg-6" align="left">
						&nbsp;
					</div>
					 
                	<div class="col-12 col-sm-6  col-lg-6" align="left">
						  							
						<div class="hidden-sm-up" >
							<img class="bc-computer-image wow fadeInUp" src="/images/windows11/win11_feature_2.png" >
						</div>
						
                    	<div class="h2 mb-4 mb-sm-4 mob-text-center">Get a fresh perspective</div>

						<div class="banner-para ls-0 mb-5 mb-sm-4 mob-text-center">
							<span class="d-lg-block">
								Windows 11 provides a calm and creative space where you can pursue your passions through a fresh experience. From a rejuvenated Start menu to new ways to connect to your favourite people, news, games, and content—Windows 11 is the place to think, express, and create in a natural way.
							</span>  
						</div> 
						  
						<div class="banner-para ls-0 mb-5 mb-sm-4 mob-text-center">
							 <!-- Button trigger modal -->
								<button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Uh9643c2P6k" data-target="#myModal">
								  Play Video
								</button>
                   		</div> 
						
							
					</div>
				</div>	
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div> 
        </section>
		
		
		
		 
		
  
         
        <section class="bg_img" style="background-color:#ebf3f5;background-image: url('/images/windows11/win11_feature_3_bg.png');background-position: right;background-size:contain;">
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row">
					 
                	<div class="col-12 col-sm-6  col-lg-6" align="left">			
						
							
						<div class="hidden-sm-up" >
							<img class="bc-computer-image wow fadeInUp" src="/images/windows11/win11_feature_3.png" >
						</div>
						
                    	<div class="h2 mb-4 mb-sm-4 mob-text-center">Maximise your productivity</div>				 
                        <div class="banner-para ls-0">
							<span class="d-lg-block">
								Access all the apps you need and multi-task with ease with tools like Snap layouts, Desktops, and a new more-intuitive redocking experience.
							</span> 							
						</div> 					 
                    </div> 
					
					<div class="col-12 col-sm-6  col-lg-6" align="right">
						&nbsp;
					</div>
				 
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div> 
        </section>
		
		
		
		
		
  
         
        <section class="bg_img" style="background-color:#fff;background-image: url('/images/windows11/win11_feature_4_bg.png');background-position: center;">
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row"> 
					
					<div class="col-12 col-sm-6  col-lg-6" align="left">
						&nbsp;
					</div>
					 
                	<div class="col-12 col-sm-6  col-lg-6" align="left">
						  							
						<div class="hidden-sm-up" >
							<img class="bc-computer-image wow fadeInUp" src="/images/windows11/win11_feature_4.png" >
						</div>
						
                    	<div class="h2 mb-4 mb-sm-4 mob-text-center">New ways to connect</div>
				 
                        <div class="banner-para ls-0">
							<span class="d-lg-block">
								Connect instantly to the people you care about right from your desktop with Microsoft Teams. Call or chat for free—no matter what device they’re on.<sup>3</sup>
							</span> 
							
						</div> 
					 
                    </div> 
					 
				 
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div> 
        </section>
		
		
		
		
         
        <section class="bg_img" style="background-color:#ebf3f5;background-image: url('/images/windows11/win11_feature_5_bg.png');background-position: center;">
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row">  
                	<div class="col-12 col-sm-6  col-lg-6" align="left"> 
						<div class="hidden-sm-up" >
							<img class="bc-computer-image wow fadeInUp" src="/images/windows11/win11_feature_5.png" >
						</div>
						
                    	<div class="h2 mb-4 mb-sm-4 mob-text-center">Your content, curated by you</div>
				 
                        <div class="banner-para ls-0">
							<span class="d-lg-block">
								With Microsoft Edge and a multitude of Widgets you can choose from, you can quickly stay up to date with the news, information, and entertainment that matters most to you.<sup>4</sup> Easily find the apps you need and the programmes you love to watch in the new Microsoft Store.
							</span>  
						</div>  
                    </div> 
					 
					<div class="col-12 col-sm-6  col-lg-6" align="left">
						&nbsp;
					</div>
					   
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div> 
        </section>
		
		
		
         
        <section class="bg_img" style="background-color:#fff;">
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row mb-4 mb-sm-5">
					<div class="col-12 col-sm-3  col-lg-2" align="center"></div>
					
                	<div class="col-12 col-sm-6  col-lg-8" align="center" style="padding: 0px 15px;">
						
                    	<div class="h2 mb-4 mb-sm-4 mob-text-center">Get ready with us</div>				 
                        <div class="banner-para ls-0">
							<span class="d-lg-block">
								Windows 11 isn’t here yet, but will be coming later this year.
							</span>  					
							<span class="d-lg-block">
								Let’s check out the below computer that you can get a free upgrade when Windows 11 rolls out!
							</span> 		
							
						</div> 					 
                    </div> 
					  
                </div>
				
				 <div class="row"> 
					 
					<div class="col-12 col-lg-4 mb-5 mb-sm-5 wow fadeInLeft" align="center">
						<img class="mb-4 mb-sm-4" src="/images/windows11/win11_feature_6.jpg" style="width:100%;">
						<a class="btn btn-black" target="_blank" href="https://in.nexstmall.com/products/avita-pura-14">PURA E</a>
					</div>
					 
					 <div class="col-12 col-lg-4 mb-5 mb-sm-5 wow fadeInUp" align="center">
						<img class="mb-4 mb-sm-4" src="/images/windows11/win11_feature_7.jpg" style="width:100%;">
						<a class="btn btn-black"  target="_blank"  href="https://in.nexstmall.com/products/avita-cosmos-2-in-1-ns12t5in021p">COSMOS 2-IN-1</a>
					</div> 
					 
					 <div class="col-12 col-lg-4 mb-5 mb-sm-5 wow fadeInRight" align="center">
						<img class="mb-4 mb-sm-4 " src="/images/windows11/win11_feature_8.jpg" style="width:100%;">
						<a class="btn btn-black"  target="_blank"  href="https://in.nexstmall.com/collections/liber-v14">LIBER V</a>
					</div>
					 
                </div>
				
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div> 
        </section>
		
		
		
		 
		
         
        <section  style="background-color:#662d91;">
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row">
					<div class="col-12 col-lg-2" align="center"></div>
					
                	<div class="col-12 col-lg-8 txt-white" align="center">						  
                    	<div class="h2 mb-4 mb-sm-5 mob-text-center">Check out all AVITA Laptops that able to upgrade to Windows 11 for FREE.</div>				 
                        <div class="banner-para ls-0 text-center">
							 				
							<span class="d-lg-block">
								<a class="btn btn-whilte" href="https://in.nexstmall.com/" target="_blank" style="margin-right: 15px;">ACTION NOW</a>
								 
							<!--	{{--  <a class="btn btn-whilte" href="https://avita-india.com/news/detail/10" target="_blank">PRODUCT LIST</a>   --}} -->
								<a class="btn btn-whilte" href="#">PRODUCT LIST</a> 
								
							</span> 		
							
						</div> 					 
                    </div>  
                </div>
				 
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div> 
        </section>
		
		
		
		
         
        <section  style="background-color:#f0f0f0;">
            <div class="container"> 
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
				
                <div class="row">
					<div class="col-12 col-lg-2" align="center"></div>
					
                	<div class="col-12 col-lg-8" align="center">						  
                    	<div class="h2 mb-4 mb-sm-5 mob-text-center">Frequently asked questions about Windows 11</div>				 
                        <div class="banner-para ls-0 text-center mb-4">
							 				
							<span class="d-lg-block">
								<a class="btn btn-black" href="https://www.microsoft.com/en-hk/windows/windows-11#show-more-faq" target="_blank">VIEW FAQs</a>
							</span> 		
							
						</div> 					 
                    </div>  
                </div>
				   
            </div> 
        </section>
		
		 

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5" style="list-style: decimal;">       
					<li>Model list may be updated periodically. For the information about local availability, please contact the sales location in your region.</li>
					<li>Upgrade rollout plan is being finalized and is scheduled to begin late in 2021 and continue into 2022. Specific timing will vary by device.</li>
					<li>Certain features require specific hardware, See: <a href="http://www.microsoft.com/windows/windows-11-specifications" target="_blank">http://www.microsoft.com/windows/windows-11-specifications</a></li>
					<li>Internet access required. Service fees may apply.</li>
					<li>Pre-release product shown, subject to change.</li> 
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>
		
		
		
		
		
		
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
			</div>
        
        
      </div>

    </div>
  </div>
</div> 
  
		
<!-- Modal -->
		
		
		

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
	<link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
@endsection

@section('js')


    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
	  <script type="text/javascript">
		  new WOW().init();
		  
		  
		  $(document).ready(function() {
 

			var $videoSrc;  
			$('.video-btn').click(function() {
				$videoSrc = $(this).data( "src" );
			});
			console.log($videoSrc);



			// when the modal is opened autoplay it  
			$('#myModal').on('shown.bs.modal', function (e) {

			// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
			$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
			})



			// stop playing the youtube video when I close the modal
			$('#myModal').on('hide.bs.modal', function (e) {
				// a poor man's stop video
				$("#video").attr('src',$videoSrc); 
			}) 

 
		// document ready  
		});

		  
		  
		  
	  </script>

@endsection
