<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png" alt="AVITA India Official Website" />
        </a>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a href="/"><img src="/images/logo.png" alt="AVITA India Official Website" /></a>
                </li>
                <li class="nav-item has-dropdown">
                    <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link"><label for="header_product">{{ __('messages.products') }}</label></a>

                    <div class="dropdown">
                        <ul class="list-unstyled">

                            <li class="nav-item has-dropdown">
                                <input id="header_product_liber" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_liber"
                                        class="d-block mb-0">{{ __('messages.laptops') }}</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['admiror']) }}">@lang('site.admiror')</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['pura']) }}">@lang('site.pura')</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['liber-v']) }}">@lang('site.liber-v')</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['liber-v-gold-blue']) }}">@lang('site.liber-v-gold')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', 'cosmos-2in1') }}">@lang('cosmos.name')</a>
                                        </li>

                                        {{-- <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', 'magus-lite-2in1-laptop') }}">@lang('magus.name')</a>
                                            </li> --}}

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', 'essential') }}">@lang('site.essential_name')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['liber-new-generation']) }}">@lang('site.liber-new-generation')</a>
                                        </li>
                                        <li class="nav-item">
                                            {{-- <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['ultimus']) }}">@lang('site.ultimus_c')</a> --}}
                                                <a class="nav-link px-md-4 py-2" >@lang('site.ultimus_c')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            {{-- <li class="nav-item has-dropdown">
                                <input id="header_product_device" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">{{ __('messages.smart device') }}</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['imago']) }}">@lang('site.imago_series')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['modus']) }}">@lang('site.modus_scale')</a>
                                        </li>
                                        <li class="nav-item has-dropdown">
                                        <input id="header_product_device" type="checkbox" hidden="">
                                            <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">{{ __('messages.domus') }}</label></a>
                                              <div class="dropdown">
                                                 <ul class="list-unstyled">
                                                  <li class="nav-item">
                                                      <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['domus']) }}">@lang('site.domus_led')</a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['baton']) }}">@lang('site.domus_baton')</a>
                                                  </li>
                                                 </ul>
                                              </div>  
                                        </li> 
                                    </ul>
                                </div>
                            </li> --}}


                            <li class="nav-item has-dropdown">
                                <input id="header_product_accessories" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_accessories"
                                        class="d-block mb-0">{{ __('messages.accessories') }}</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <li class="nav-item">

                                            <a class="nav-link px-md-4 py-2">@lang('site.mouse')</a>
                                        </li>
                                        <li class="nav-item">

                                            <a class="nav-link px-md-4 py-2"
                                                href="/accessories/sleeve">@lang('site.sleeve')</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item has-dropdown">
                                <input id="header_product_domus" type="checkbox" hidden="">
                                <label for="header_product_domus" class="d-block mb-0"><a
                                        class="nav-link px-md-4 py-2">Smart Lighting [Launching Soon] </a></label>

                            </li>


                            {{-- <li class="nav-item has-dropdown">
                                <input id="header_product_domus" type="checkbox" hidden="">
                                <label for="header_product_domus" class="d-block mb-0"><a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['domus']) }}">{{ __('site.domus') }}</a></label>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <li class="nav-item">

                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['smart-lighting']) }}">{{ __('site.smart_lighting') }}</a>
                                        </li> 
                                        <li class="nav-item">

                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['conventional-lighting']) }}">{{ __('site.conventional_lighting') }}</a>
                                        </li>
                                        <li class="nav-item">

                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['emergency-lighting']) }}">{{ __('site.emergency_lighting') }}</a>
                                        </li>
                   
                                    </ul>
                                     
                                </div>
                            </li> --}}

                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">{{ __('messages.news') }}</a>
                </li>


                <li class="nav-item has-dropdown">
                    <input id="where_to_buy" type="checkbox" hidden="">
                    <a class="nav-link"><label for="where_to_buy">{{ __('messages.where_to_buy') }}</label></a>

                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item has-dropdown">
                                <a class="nav-link px-md-4 py-2" href="/where-to-buy"> <label for="header_offline"
                                        class="d-block mb-0">{{ __('messages.offline_stores') }}</label></a>
                            </li>

                            <li class="nav-item has-dropdown">
                                <input id="header_buy_online" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"> <label for="header_buy_online"
                                        class="d-block mb-0">{{ __('messages.buy_online') }}</label></a>

                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" target="_blank"
                                                href="https://in.nexstmall.com/">NEXSTMALL</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" target="_blank"
                                                href="https://www.flipkart.com/search?q=avita+laptops&otracker=search&otracker1=search&marketplace=FLIPKART&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.brand%255B%255D%3DAvita">Flipkart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" target="_blank"
                                                href="https://www.amazon.in/s?k=avita&ref=nb_sb_noss_2">Amazon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" target="_blank"
                                                href="https://www.reliancedigital.in/search?q=avita:relevance">Reliance
                                                Digital</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" target="_blank"
                                                href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2&page=1&brand=510306">Paytm
                                                Mall</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" target="_blank"
                                                href="https://www.tatacliq.com/search/?searchCategory=all&text=avita">TATA
                                                Cliq</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>


                        </ul>
                </li>




                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">{{ __('messages.support') }}</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/sales-enquiry">{{ __('messages.sales enquiry') }}</a>
                </li>


                <li class="nav-item has-dropdown">
                    <input id="header_countries" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"> <label for="header_countries" class="d-block mb-0"><img
                                src="/images/maps-and-flags.png"></label></a>
                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank"
                                    href="https://avita-bangladesh.com/">Bangladesh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank"
                                    href="https://avita-nepal.com/">Nepal</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank" href="https://avita-srilanka.com/">Sri
                                    Lanka</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank">Bhutan <span
                                        class="small">[Launching Soon]</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank">Afghanistan <span
                                        class="small">[Launching Soon]</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank">Maldives <span
                                        class="small">[Launching Soon]</span></a>
                            </li>
                        </ul>
                    </div>
                </li>




                <!---- Language Dropdown --------->
                <!-----
                <li class="nav-item has-dropdown">
                    <input id="header_buy_online" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"><label for="header_buy_online" class="d-block mb-0">{{ app()->getLocale() }}</label></a>
                    <div class="dropdown">
                        <ul class="list-unstyled">
                          <li class="nav-item">
                               <a href="{{ url('locale/en') }}" ><img src="{{ asset('images/en.jpg') }}" width="30px" height="20x"></i> ENGLISH</a>
                           </li>
                            <li class="nav-item">
                                <a href="{{ url('locale/hi') }}" ><img src="{{ asset('images/hi.jpg') }}" width="30px" height="20x"></i> हिन्दी</a>
                            </li>
                        </ul>
                    </div>
                 </li>
                ------>
                <!--- Language Dropdown ----->
            </ul>
        </div>
        <!-- <div id="overlay">
        </div> -->
        @if ($user = Auth::user())
            <aside class="navbar-user-warp hidden-md-up">
                <div class="navbar-user navbar-md-user">
                    <div class="user-header pt-2 px-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="username">{{ $user->name }}</div>
                            <div class="ml-auto">
                                <a href="" onclick="event.preventDefault();">
                                    <span aria-hidden="true" class="close">&#10005;</span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-content px-3">
                        <div class="align-items-center px-2 pb-2">
                            <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#"
                                    class="useremail pl-4 ">{{ $user->email }}</a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}"
                                    class=" pl-4">@lang('site.member_center')</a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit"
                                        class="btn btn-primary my-3">@lang('site.logout')</button></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </div>
                </div>
            </aside>
        @endif

    </div>
</nav>
<!-- ./Header -->
