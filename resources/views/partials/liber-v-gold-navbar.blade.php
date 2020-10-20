<div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
        <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
        <div class="dropdown">
         <button class="dropbtn"><a class="nav-link py-1" href="{{ route('product.overview', ['liber-v-gold']) }}">@lang('site.productnav_overview_liber_v_gold')</a></button>
                <div class="dropdown-content">
                    <li class="nav-item"><a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber-v-gold-black']) }}"><small>@lang('site.liber-v-gold-black')</small></a></li>
                    <li class="nav-item"><a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber-v-gold-blue']) }}"><small>@lang('site.liber-v-gold-blue')</small></a></li>
    
              </div>
              
            </div>
            <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', ['liber-v-gold']) }}">@lang('site.productnav_spec')</a></li>
              <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', ['liber']) }}">@lang('site.productnav_support')</a></li>
              <li class="nav-item"><a class="nav-link py-1" href="/where-to-buy">@lang('site.productnav_wheretobuy')</a></li>
             
            </ul>
        </div>
    </div>
</div>
