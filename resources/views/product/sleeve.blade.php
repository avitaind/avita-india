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
   /*--------------------------------------------------------------
   # Why Us
   --------------------------------------------------------------*/
   .why-us{
   background-color: #F0F0F0;
   }
   .section-bg{
      background-color: #ffffff;
      }
   .why-us .content {
   padding: 60px 100px 0 100px;
   }
   .why-us .content h3 {
   font-weight: 400;
   font-size: 34px;
   color: #37517e;
   }
   .why-us .content h4 {
   font-size: 20px;
   font-weight: 700;
   margin-top: 5px;
   }
   .why-us .content p {
   font-size: 15px;
   color: #848484;
   }
   .why-us .img {
   background-size: contain;
   background-repeat: no-repeat;
   background-position: center center;
   }
   .why-us .accordion-list {
   padding: 0 100px 60px 100px;
   }
   .why-us .accordion-list ul {
   padding: 0;
   list-style: none;
   }
   .why-us .accordion-list li + li {
   margin-top: 15px;
   }
   .why-us .accordion-list li {
   padding: 20px;
   background: #fff;
   border-radius: 4px;
   }
   .why-us .accordion-list a {
   display: block;
   position: relative;
   font-family: "Poppins", sans-serif;
   font-size: 16px;
   line-height: 24px;
   font-weight: 500;
   padding-right: 30px;
   outline: none;
   cursor: pointer;
   }
   .why-us .accordion-list span {
   color: #47b2e4;
   font-weight: 600;
   font-size: 18px;
   padding-right: 10px;
   }
   .why-us .accordion-list i {
   font-size: 24px;
   position: absolute;
   right: 0;
   top: 0;
   }
   .why-us .accordion-list p {
   margin-bottom: 0;
   padding: 10px 0 0 0;
   }
   .why-us .accordion-list .icon-show {
   display: none;
   }
   .why-us .accordion-list a.collapsed {
   color: #343a40;
   }
   .why-us .accordion-list a.collapsed:hover {
   color: #47b2e4;
   }
   .why-us .accordion-list a.collapsed .icon-show {
   display: inline-block;
   }
   .why-us .accordion-list a.collapsed .icon-close {
   display: none;
   }
   @media (max-width: 1024px) {
   .why-us .content, .why-us .accordion-list {
   padding-left: 0;
   padding-right: 0;
   }
   }
   @media (max-width: 992px) {
   .why-us .img {
   min-height: 400px;
   }
   .why-us .content {
   padding-top: 30px;
   }
   .why-us .accordion-list {
   padding-bottom: 30px;
   }
   }
   @media (max-width: 575px) {
   .why-us .img {
   min-height: 200px;
   }
   }
</style>
{{--  
<link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
--}}
@endsection
@section('content')
{{--  @include('partials.rolling-cta')  --}}
<section class="top-nav-padding homepage-banner">
   <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
      <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
            <div class="responsive-block">
               {{--  
               <a href="https://bit.ly/3FoPUl0">
                  --}}
                  <div class="banner-block responsive-item">
                     <div class="banner-bg hidden-sm-down banner-web-Sleeve-Bag"></div>
                     <div class="banner-bg hidden-md-up banner-mob-Sleeve-Bag"></div>
                  </div>
               </a>
            </div>
         </div>
         <ol class="carousel-indicators">
            {{--  
            <li data-target="#home_banner" data-slide-to="0" class="active"></li>
            <li data-target="#home_banner" data-slide-to="1"></li>
            --}}
         </ol>
      </div>
   </div>
</section>

<!-- End Why Us Section 1 -->
<section id="why-us" class="why-us section-bg">
   <div class="container-fluid" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
               <h3>AVITA Ubique<strong> 3-in-1 </strong>sleeve</h3>
               <p>
                  An ideal laptop bag is one that keeps the device safe. It also acts as a style accessory and adds more to your personality. Our newly launched Avita Ubique 3-in-1 sleeve is designed to give safety to your laptop while making you look fabulous as you do it. 
               </p>
            </div>
            <div class="accordion-list">
               <ul>
                  <li>
                     {{--  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis  --}}
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img " style='background-image: url("https://avita-india.com/images/sleeves/front_&back.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->

 

<!-- End Why Us Section 2 -->
<section id="why-us" class="why-us section-bg">
   <div class="container-fluid" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://avita-india.com/images/sleeves/Lifestyle_3.jpg");' data-aos="zoom-in" data-aos-delay="">&nbsp;</div>
         <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
               {{--  <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>  --}}
               <h3>Perfect fit for all your needs</h3>
               <p>
                  As the name suggests, AVITA Ubique 3-in-1 is available in 3 different styles. While one can use this as a sling bag, it can also be arm candy and can be carried around easily. Last but not the least, the bag also acts as a laptop sleeve for days when you don't feel like twirling around with your bag. 
               </p>
            </div>
            <div class="accordion-list">
               <ul>
                  <li>
                     {{--  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis  --}}
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->

 

<!-- End Why Us Section 3 -->
<section id="why-us" class="why-us section-bg">
   <div class="container-fluid" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
               {{--  <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>  --}}
               <h3>Available in 4 colours</h3>
               <p>
                  Pick your bag as per your mood! The versatile bag is available in 4 different shades namely blue, black, dark grey, and light grey.
               </p>
            </div>
            <div class="accordion-list">
               <ul>
                  <li>
                     {{--  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis  --}}
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://avita-india.com/images/sleeves/Multicolors.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->

 

<!-- End Why Us Section 4 -->
<section id="why-us" class="why-us section-bg">
   <div class="container-fluid" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://avita-india.com/images/sleeves/Lifestyle_2.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
         <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
               {{--  <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>  --}}
               <h3>Spacious interiors</h3>
               <p>
                  What's even a bag that cannot hold all your essentials? AVITA Ubique 3-in-1 sleeve comes with spacious interiors to keep your belongings like charger, hard disks, notepad, pen, etc. Its 3 extra pockets give you easy access to take out smaller items. 
               </p>
            </div>
            <div class="accordion-list">
               <ul>
                  <li>
                     {{--  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis  --}}
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->

 

<!-- End Why Us Section 5 -->
<section id="why-us" class="why-us section-bg">
   <div class="container-fluid" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
               {{--  <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>  --}}
               <h3>Lightweight and comfortable</strong></h3>
               <p>
                  This lightweight build bag is easy to carry around. It is also equipped with cushioned laptop support for optimal comfort and safety. 
               </p>
            </div>
            <div class="accordion-list">
               <ul>
                  <li>
                     {{--  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis  --}}
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://avita-india.com/images/sleeves/top_shot.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->

 

<!-- End Why Us Section 6 -->
<section id="why-us" class="why-us section-bg">
   <div class="container-fluid" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://avita-india.com/images/sleeves/spill_resistant.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
         <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
               {{--  <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>  --}}
               <h3>Waterproof coating</h3>
               <p>
                  Made for all weather conditions. The durable PU-coated material makes the bag resistant to water.
               </p>
            </div>
            <div class="accordion-list">
               <ul>
                  <li>
                     {{--  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.  --}}
                        </p>
                     </div>
                  </li>
                  <li>
                     {{--  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>  --}}
                     <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                           {{--  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis  --}}
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Why Us Section -->
@endsection