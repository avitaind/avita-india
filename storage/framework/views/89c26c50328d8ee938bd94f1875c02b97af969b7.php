<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.DOMUS_home'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<main id="main">

<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="responsive-block">
            <a href="">
          
                    <div class="banner-block responsive-item">
                        <div class="banner-bg hidden-sm-down " style="background-image: url('https://www.lighting.philips.co.in/content/dam/b2c/en_IN/marketing-catalog/lighting/homebase/smart-wifi-led-l.jpg');">
                            <div class="carousel-text">
                                <h1>Smart Wi-fi<br/>LED Lighting</h1>
                                <p>No Smart is Simple</p>
                                <button class="btn btn-secondary">View More</butto>
                            </div>
                        </div>                  
                        <div class="banner-bg hidden-md-up banner-mob-PURA-E"></div>
                    </div>
                  </a>
            </div>
          </div> 
          
          <div class="carousel-item ">
            <div class="responsive-block">
            <a href="">
          
                    <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down " style="background-image: url('https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/twinglow-l.jpg');">
                            <div class="carousel-text">
                                <h1>Smart Wi-fi<br/>LED Lighting</h1>
                                <p>No Smart is Simple</p>
                                <button class="btn btn-secondary">View More</butto>
                            </div>
                        </div>                 
                        <div class="banner-bg hidden-md-up banner-mob-Cosmos"></div>
                    </div>
                  </a>
            </div>
          </div> 

          <div class="carousel-item ">
            <div class="responsive-block">
            <a href="">
          
                    <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down " style="background-image: url('https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/world-of-lighting-l.jpg');">
                            <div class="carousel-text">
                                <h1>Smart Wi-fi<br/>LED Lighting</h1>
                                <p>No Smart is Simple</p>
                                <button class="btn btn-secondary">View More</butto>
                            </div>
                        </div>                  
                        <div class="banner-bg hidden-md-up banner-mob-Essential"></div>
                    </div>
                  </a>
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

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About AVITA DOMUS</h2>
    </div>

    <div class="row">
      <p class="">
        AVITA DOMUS enables you to make every moment mesmerizing and extra-special. With DOMUS spread the essence of a whopping 16 million colors. It gives your moments an everlasting touch without compromising your convenience and comfort. 
      </p>
    </div>

    <div class="section-title">
      <h2>Features</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6 pt-4 pt-lg-0">
        <ul class="my-3">
        
          <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Wi-Fi and Bluetooth enabled – AVITA Domus does not require hub or bridge as it can directly connect to your Wi-Fi. It can also be paired with your smartphone or tablet.</li>
          <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Voice control – With voice access, you can control AVITA Domus with spoken demands. </li>
          <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Mood enhancer – AVITA Domus acts as a mood enhancer and increases motivation.</li>
          
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
      
      <ul class="my-3">
        
          
          <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Wide range of colours - AVITA Domus provides a number of colour changing options ranging from cool, warm to solid.</li>
          <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Timers – Scheduling made easy! AVITA Domus allows you to schedule automated events. These events include turning lights on and off, changing the colour, or performing certain functions at scheduled times.</li>
        </ul>
        
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= Demo Section ======= -->

<section id="demo" class="demo">
<div class="section-title">
      <h2>SELECT COLOR</h2>
    </div>
  <div class="container">

  <div class="row">
       <div class="col py-4 px-md-6 border bg-light">
               <img src="<?php echo e(asset('images/bulb.png')); ?>"></img>
          <div class="circle" id ="colorVal" >
            
         </div>

       </div>
       <div class="col py-4 px-md-6 border bg-light">

            <h1 id ="colorValue">Choose Your Own Color</h1>
            <input type="color" class="custom" id ='color'></input>
          </div>

  </div>
  
      
</section>
<!-- ======= Demo Section End ======= -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>OUR PRODUCTS</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:200px;">
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              <h6 class="mt-4"><a href="#">View Details</a></h6>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:200px;">
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              <h6 class="mt-4"><a href="#">View Details</a></h6>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:200px;">
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              <h6 class="mt-4"><a href="#">View Details</a></h6>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <img src="https://www.lighting.philips.co.in/b-dam/b2c/en_IN/marketing-catalog/lighting/homebase/led-collection.jpg" style="width:200px;">
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              <h6 class="mt-4"><a href="#">View Details</a></h6>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    
<!-- ======= Demo Section ======= -->

<section id="demo" class="demo">

  <div class="container circle-view">
    <div class="row">
       <div class="col-md-2">
          <div class="circle1" id ="colorVal1" ></div>
    </div>
    <div class="col-md-2">
          <div class="circle2" id ="colorVal2" ></div>
    </div>
    <div class="col-md-2">
          <div class="circle3" id ="colorVal3" ></div>
    </div>
    <div class="col-md-2">
          <div class="circle4" id ="colorVal4" ></div>
    </div>
    <div class="col-md-2">
          <div class="circle5" id ="colorVal5" ></div>
    </div>
    <div class="col-md-2">
          <div class="circle6" id ="colorVal6" ></div>
    </div>
  </div>

  </div>
  <div class="container demo-text w-50">
      <h1>Personal smart lighting</h1>
      <p>AVITA DOMUS transforms your every day. It can gently wake you up in the morning, get you energized for the day ahead, and even give you a warm welcome when you arrive home. Because the right light changes everything.</p>
  </div>



</section>
<!-- ======= Demo Section End ======= -->

 
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content">
          <h3>How to install the <strong>app/ Scan the QR code</strong> to install</h3>
          
          
        </div>

        

        <ul class=" content mt-0">
        
          <li> Step 1: Download free AVITA bulb app on App store or Google Play</li>
          <li> Step 2: Fix the bulb carefully into the fixture</li>
          <li> Step 3: Following the stated steps, pair light with the app </li>
          <li> Step 4: Your smart light LED experience is ready! </li>
          
        </ul>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://www.lighting.philips.co.in/b-dam/b2b-li/en_IN/home/feedback-download.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Skills Section ======= -->

<!-- <section id="skills" class="skills">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
        <img src="/images/domus/skills.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>

        <div class="skills-content">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</section> -->

<!-- End Skills Section -->


<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

    <div class="row">
      <div class="col-lg-9 text-center text-lg-start">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#">Call To Action</a>
      </div>
    </div>

  </div>
</section><!-- End Cta Section -->


<!-- ======= Pricing Section ======= -->
<!-- <section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pricing</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="box">
          <h3>Free Plan</h3>
          <h4><sup>$</sup>0<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
            <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <a href="#" class="buy-btn">Get Started</a>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box featured">
          <h3>Business Plan</h3>
          <h4><sup>$</sup>29<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
          </ul>
          <a href="#" class="buy-btn">Get Started</a>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="box">
          <h3>Developer Plan</h3>
          <h4><sup>$</sup>49<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
          </ul>
          <a href="#" class="buy-btn">Get Started</a>
        </div>
      </div>

    </div>

  </div>
</section> -->

<!-- End Pricing Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->



</main><!-- End #main -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
      let avitaColor = document.getElementById('avitaColor');
     let colorInput = document.getElementById('color');

        console.log(avitaColor);
        colorInput.addEventListener('input', () =>{
        // document.getElementById('colorVal').innerHTML = colorInput.value;
        document.getElementById('colorVal').style.backgroundColor =  colorInput.value;

        });

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-domus.css')); ?>"/>

<style>
.carousel-text{
	position:absolute;
	right:60%;
	bottom:30%;
	left:5%;
	z-index:10;
	padding-top:20px;
	padding-bottom:20px;
	color:#fff;
	text-align:center;
	text-shadow:0 1px 2px rgba(0,0,0,.6)
	}

	.carousel-text h2{
		font-size: 24px;
	}
	
	.carousel-text.btn
	{
	text-shadow:none
	}
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>