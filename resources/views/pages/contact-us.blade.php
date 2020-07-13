@extends('layouts.app')

@section('title')
    @lang('title.contact_us')
@stop

@php
 $page = 'contactus';
@endphp

@section('content')
    <main>
       <section class="aboutus-panel top-nav-padding ls-0">
            <div class="aboutus-contact py-5 px-2">
                <div class="container">
                    <h3 class="text-left mt-4 mb-3 font-weight-light">@lang('site.contactus_contactus')</h3>
                    <p>AVITA Customer Support. We are always available in case you need help. For queries on the product, warranty related inquiries or any form of customer support, please contact us on our  toll-free customer support number or write to on our support email for general sales enquiry.</p>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="contact_us_title">General Sales Enquiry :</h2>

                            <div class="mb-2">+91-7827845054</div>

                            <div class="mb-2"><b>Email :</b><br>
                                Insales@nexstgo.com</div>

                            <div><b>@lang('site.contactus_operating') :</b><br>
                                Monday to Friday : 9:00 am - 6:00 pm</div>


                            <div class="mb-2"><b>Address :</b><br>
                                211B - 211C, 2<sup>nd</sup> Floor, Elegance Tower, Jasola Vihar, New Delhi, Delhi-110025</div>
                            <h2 class="contact_us_title">Service :</h2>
                            <div class="mb-2">Toll Free : 1800-103-9635</div>

                        </div>
                        <div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14020.21329476867!2d77.2885078!3d28.5381169!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4fee98c6c6f1c5b1!2sAVITA%20India!5e0!3m2!1sen!2sin!4v1577962170324!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>
   </main>

@endsection
