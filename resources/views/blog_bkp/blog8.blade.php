 @extends('layouts.app')

 @section('title')
        @lang('title.blog8')
@stop

@section('content')
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <br/>
               <div class="event-banner">
                        <img src="images/blog/ssd-storage-for-modern-laptops.png" class="img-responsive" />
                    </div>
       <div class="event-desc-block pb-5">
       <h5 class="text-center mt-4 mb-3 font-weight-light">@lang('site.blog8')</h5>
       <p><span lang="EN-US">The Hard Disk Drive technology has conquered a major percentage of the market share, for a better part of the last two decades. Being a predominant storage device for modern computers, the HDD technology has lured the computer enthusiasts for a very long time. But not anymore, modern storage technology like Solid State Drive has surfaced as a prime challenger to the existing non-volatile storage mediums. In this blog post, we are going to mention the major benefits of SSD as it slowly replaces the majority of hard disk drives. So, let’s consider the following factors:</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>1. Access Time</strong></h6>          
       <p><span lang="EN-US">A Solid State Drive ensures an access speed of 35 to 100 microseconds. This speed is 100 times faster than that of Hard Disk Drive. What does that mean for you? An SSD can help users run programs more quickly. Any program that requires a large amount of data can run smoothly using SSD storage. If you want your laptop to boot-up within 10-13 seconds, SSD storage is the way to go. Therefore, SSDs ensure a minimal boot time for accessing your personal computer.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>2. Reliability</strong></h6>          
       <p><span lang="EN-US">One of the most important aspects of an SSD is its simple built. A hard disk drive generally has mechanical parts which are subject to various issues in the long run. On the other hand, an SSD has no mechanical parts, providing a better performance and reliability.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>3. Capacity</strong></h6>          
       <p><span lang="EN-US">When it comes to capacity, SSDs sport a storage space up to 2TB. Though being on the higher side when it comes to price tag, Solid State Drives give a tough competition to Hard Disk Drives when it comes to storage capacity.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>4. Power</strong></h6>          
       <p><span lang="EN-US">Solid State Drives use flash technology which reduces the power usage to a huge extent. It not only results in a lower energy bill, but also an increase in battery life for laptops.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>5. Noise</strong></h6>          
       <p><span lang="EN-US">Hard Disk Drives are known to create noises while functioning. The reason is the mechanical parts wearing down over time. The noise created by Hard Disk Drives is very annoying and can hamper your computing experience. Solid State Drives have no mechanical parts and therefore do not produce any noise while functioning.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>6. Size</strong></h6>          
       <p><span lang="EN-US">Solid State Drives are available in the market in 2.5”, 1.8”, and 1.0” size. On the other hand, Hard Disk Drives usually come in 3.5” and 2.5” both for laptops and desktop computers. There’s no option smaller than these two. With SSDs, modern computing machines enjoy the opportunity to be ultra-light and slim.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>7. Heat</strong></h6>          
       <p><span lang="EN-US">The amount of heat generated in Hard Disk Drives can slowly damage the functionality due to increase in wear and damage. On the other hand, Solid State Drives generate less heat, contributing to its increased lifespan and durability.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>8. Price Range</strong></h6>          
       <p><span lang="EN-US">SSD is pricier than traditional hard drives, one of the reasons why budget or cheap laptops don’t have it. Although in today’s world, most users use SSD laptops along with an external hard disk for all storage other than system applications. But with a Solid State Drive, you get all the above advantages which definitely make it worth the premium you pay for it.</span></p>
       <h6 class="text-left mt-4 mb-3 font-weight-light"><strong>Over to You</strong></h6>          
       <p><span lang="EN-US">There is no reason why any user would want to drive a brand new car with an old engine. So why would you buy a laptop with an old-school mechanical hard drive and merge onto the superfast informational highway? Check out the brand new AVITA laptops sporting the lightning-fast SSD storage only on www.avita-india.com!</span></p>
   
       </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection


@section('js')

    <script>
    
  $('.fb_share_btn').click( function(e) {

            e.preventDefault();

            FB.ui( {
                method: 'share',
                href: $(location).attr('href')
            }, function(response){

            });
        });
        

        $('.twitter_share_btn').click(function(e){

            e.preventDefault();

            var current_url = $('meta[property="og:url"]').prop('content');


            var share_url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent( current_url );
            window.open( share_url, '_blank' );
        });



    </script>

@stop
