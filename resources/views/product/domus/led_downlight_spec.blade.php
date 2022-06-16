@extends('layouts.app')

@section('title')
    @lang('title.Pura_spec')
@stop

@section('content')

    <main class="top-nav-padding">

        <!-------------------Submenu----------------------->
        @include('partials.domusLBD-product-navbar')

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-1" role="tab">
                            <div class="spec-item-name mb-4">
                                <div class="d-sm-block">10W TUNABLE CCT SMART LED DOWNLIGHTER</div>
                                {{-- <div class="d-sm-block">(35.56 cm)</div> --}}
                            </div>
                            <img class="hidden-sm-down" src="/images/domus/10w_led_downlight.png">
                        </a>

                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-2" role="tab">
                            <div class="spec-item-name mb-4">
                                <div class="d-sm-block">15W TUNABLE CCT SMART LED DOWNLIGHTER</div>
                                {{-- <div class="d-sm-block">(35.56 cm)</div> --}}
                            </div>
                            <img class="hidden-sm-down" src="/images/domus/15w_led_downlight.png">
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Tab panes -->

            <div class="tab-content">
                <div class="tab-pane active" id="spec-1" role="tabpanel">
                    <div class="container">
                        <div class="logo-wrapper d-flex px-3 mt-4">
                        </div>
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Lamp Life Hrs</div>
                                <div> 15K Hrs. {at 25ᵒC (±2ᵒC)}</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Rated Lamp Wattage</div>
                                <div>10W {<+10% Range}</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Lamp CCT</div>
                                <div> From warm white( 3000K) to CW (6500K)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Housing SIZE</div>
                                <div>6 INCH ROUND </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Ingress Protection </div>
                                <div>IP20</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Rated Luminous Flux</div>
                                <div>1000lm (for 6500K) & 900lm (for 3000K) {-10% Range}</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CRI</div>
                                <div>≥ 80</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Beam angle</div>
                                <div>≥ 120ᵒ</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">A THD</div>
                                <div>≤ 30%</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Driver Efficiency</div>
                                <div>≥ 85%</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">EMI/EMC</div>
                                <div>Compliance</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">PF</div>
                                <div>≥ 0.9</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Operating Voltage Range/Working voltage</div>
                                <div>100V - 300V</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Voltage range for Lamp "ON" & Safety</div>
                                <div>100V - 300V</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Rated Voltage for Performance & Life Time</div>
                                <div>220V - 240V</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Temperature for Performance measurment</div>
                                <div>25ᵒC (±2ᵒC)</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Working Temperature</div>
                                <div>- 10ᵒC to 45ᵒC</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Surge Voltage</div>
                                <div>≥ 3.0KV</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Compliance</div>
                                <div>IS 16102 Part 1 & 2</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Working Humidity</div>
                                <div>10% - 90% RH</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Max. voltage withstand</div>
                                <div>350VAC for 1Hr. & 370VAC for 30Mins</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Technology Based </div>
                                <div>WiFi Based</div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="tab-pane " id="spec-2" role="tabpanel">
                    <div class="container">
                        <div class="logo-wrapper d-flex px-3 mt-4">
                        </div>
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Lamp Life Hrs</div>
                                <div> 15K Hrs. {at 25ᵒC (±2ᵒC)}</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Rated Lamp Wattage</div>
                                <div>15W {<+10% Range}</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Lamp CCT</div>
                                <div>From warm white( 3000K) to CW (6500K)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Housing SIZE</div>
                                <div>6 INCH ROUND </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Ingress Protection </div>
                                <div>IP20</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Rated Luminous Flux</div>
                                <div>1500lm (for 6500K) & 1300lm (for 3000K) {-10% Range}</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CRI</div>
                                <div>≥ 80</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Beam angle</div>
                                <div>≥ 120ᵒ</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">A THD</div>
                                <div>≤ 30%</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Driver Efficiency</div>
                                <div>≥ 85%</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">EMI/EMC</div>
                                <div>Compliance</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">PF</div>
                                <div>≥ 0.9</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Operating Voltage Range/Working voltage</div>
                                <div>100V - 300V</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Voltage range for Lamp "ON" & Safety</div>
                                <div>100V - 300V</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Rated Voltage for Performance & Life Time</div>
                                <div>220V - 240V</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Temperature for Performance measurment</div>
                                <div>25ᵒC (±2ᵒC)</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Working Temperature</div>
                                <div>- 10ᵒC to 45ᵒC</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Surge Voltage</div>
                                <div>≥ 3.0KV</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Compliance</div>
                                <div>IS 16102 Part 1 & 2</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Working Humidity</div>
                                <div>10% - 90% RH</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Max. voltage withstand</div>
                                <div>350VAC for 1Hr. & 370VAC for 30Mins</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Technology Based </div>
                                <div>WiFi Based</div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <!-- DISCLAIMER-->
        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>Windows 10 Home in S mode works exclusively with apps from the Microsoft Store within Windows and
                        accessories that are compatible with Windows 10 Home in S mode. A one-way switch out of S mode is
                        available. Learn more at <a href="https://Windows.com/SmodeFAQ"
                            target="_blank"><u>Windows.com/SmodeFAQ</u></a>.</li>
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel
                        Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon,
                        and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or
                        retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display
                        setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the
                        rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States
                        and/or other countries.</li>
                    <li>*Under Test Conditions. Actual battery life may vary depending on product configuration, usage,
                        operational conditions and power management settings. Battery life will decrease over the lifetime
                        of the battery.</li>

                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
