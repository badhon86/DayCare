@extends('assets.master')
@section('body')

<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
    <!-- START REVOLUTION SLIDER 5.0.9 fullwidth mode -->

</div>

   <!-- main -->
<div id="main" class="site-main">
<!-- page container -->
<div class="page_content">
    <!-- block with pattern -->
    <div class='left-pattern pattern pattern-2'></div>
    <!-- / block with pattern -->
    <main>
        <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
            <div class='grid_col grid_col_12'>
                <div class='ce clearfix'>
                    <div class='cws_callout'>
                        <div class='content_section'>
                            <div class='callout_title'>
                                <div class="bees bees-end"><span></span></div>Book A Sitter Here</div>
                            <div class='separate'></div>
                            <div class='callout_text'>
                                <p style="text-align: center;">If you need a babysitter or a nanny in less than 7 hours, please call us at 111-222-3333.
                                    <br /> Our office hours are Sun-Thu, 5:45am-6pm.</p>
                            </div>
                        </div>
                        {{-- <div class='button_section'><a href='#' class='cws_button xlarge'>Request a Sitter Now<div class='button-shadow'></div></a></div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class='grid_row clearfix' style='padding-bottom: 0px;'>
            <div class='grid_col grid_col_12'>
                <div class='ce clearfix'>
                    <div>
                        <h3 class="ce_title">Our <span >Pricings</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- / head of prising table -->
        <!-- pricing tables -->
        <div class='grid_row eq_cols' style='padding-bottom: 50px;'>@foreach ($gsData as $Data)
            <!-- pricing table -->
            <div class='grid_col grid_col_4 pricing_table_column'>
                <div>
                    <div class='top_section'>
                        <div class='title_section'>Daily Package</div>
                        <div class='encouragement'>coming soon</div>
                        <div class='separate'></div>
                        <div class='price_section'>
                            <div class='price_container'><span class='currency'>৳</span>
                                <div class='vova-test'></div><span class='main_price_part'>{{$Data->d_price}}</span><span class='price_details'><span class='price_description'><span>/day</span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='desc_section'>
                        <ul class="listing">
                            <li><i class="fa fa-usd"></i>&nbsp;Hourly rate</li>
                            <li><i class="fa fa-book"></i>&nbsp;coming soon</li>
                            <li><i class="fa fa-clock-o"></i>&nbsp;coming soon</li>
                            <li><i class="fa fa-money"></i>&nbsp;coming soon</li>
                        </ul>
                        <p style="text-align: center;">coming soon</p>
                    </div>
                </div>
                <div>
                    <div class='btn_section'><a class='cws_button' href='http://127.0.0.1:8000/admin/reservation/add?ref=djdBiSg'>Order Now<div class='hover-btn'></div><div class='button-shadow'></div></a></div>
                </div>
            </div>
            <!-- / pricing table -->
            <!-- pricing table -->
            <div class='grid_col grid_col_4 pricing_table_column'>
                <div>
                    <div class='top_section'>
                        <div class='title_section'>Weekly Package</div>
                        <div class='encouragement'>coming soon</div>
                        <div class='separate'></div>
                        <div class='price_section'>
                            <div class='price_container'><span class='currency'>৳</span>
                                <div class='vova-test'></div><span class='main_price_part'>{{$Data->w_price}}</span><span class='price_details'><span class='price_description'><span>/week</span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='desc_section'>
                        <ul class="listing">
                            <li><i class="fa fa-users"></i>&nbsp;coming soon</li>
                            <li><i class="fa fa-home"></i>&nbsp;coming soon</li>
                            <li><i class="fa fa-usd"></i>&nbsp;coming soon</li>
                            <li><i class="fa fa-pencil"></i>&nbsp;coming soon</li>
                        </ul>
                        <p style="text-align: center;">coming soon</p>
                    </div>
                </div>
                <div>
                    <div class='btn_section'><a class='cws_button' href='http://127.0.0.1:8000/admin/reservation/add?ref=djdBiSg'>Order Now<div class='hover-btn'></div><div class='button-shadow'></div></a></div>
                </div>
            </div>
            <!-- / pricing table -->
            <!-- pricing table -->
            <div class='grid_col grid_col_4 pricing_table_column'>
                <div>
                    <div class='top_section'>
                        <div class='title_section'>Monthly Package</div>
                        <div class='encouragement'>coming soon</div>
                        <div class='separate'></div>
                        <div class='price_section'>
                            <div class='price_container'><span class='currency'>৳</span>
                                <div class='vova-test'></div><span class='main_price_part'>{{$Data->m_price}}</span><span class='price_details'><span class='price_description'><span>/month</span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='desc_section'>
                        <ul class="listing">
                            <li><i class="fa fa-hourglass-start"></i>&nbsp;Short term assignments</li>
                            <li><i class="fa fa-clock-o"></i>&nbsp;Long term bookings</li>
                            <li><i class="fa fa-child"></i>&nbsp;coming soon</li>
                            <li><i class="fa fa-thumbs-o-up"></i>&nbsp;coming soon</li>
                        </ul>
                        <p style="text-align: center;">coming soon</p>
                    </div>
                </div>
                <div>
                    <div class='btn_section'><a class='cws_button' href='http://127.0.0.1:8000/admin/reservation/add?ref=djdBiSg'>Order Now<div class='hover-btn'></div><div class='button-shadow'></div></a></div>
                </div>
            </div>@endforeach
            <!-- / pricing table -->
        </div>

        <div class='grid_row clearfix' style='padding-top: 50px;'>
            <div class='grid_col grid_col_12'>
                <div class='ce clearfix'>
                    <div>
<p>
                        <h3 class="ce_title" style=" text-align: center;">Looking for an affordable daycare servies?<br /> <span >DAyCARe is here to help!</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- sevices -->
        <div class='grid_row clearfix'>
            <!-- sevice item -->
            <div class='grid_col grid_col_4'>
                <div class='ce clearfix'>
                    <div>
                        <p style="text-align: center;"><img class="aligncenter size-full image-type noborder" src="assets/pic/2015/09/babysitting.png" alt="babysitting" width="150" height="150" /></p>
                        <h2 class="ce_title heading" style="text-align: center;">Babysitting</h2>
                        <p style="text-align: center;">Babysitters take charge of planning and overseeing activities for children. They often play games inside and take children outdoors to keep them active and engaged while parents are away from home. Supervise homework.</p>
                        {{-- <p style="text-align: center;"><a href='#' class='cws_button mini'>More</a> --}}
                    </div>
                </div>
            </div>
            <!-- / sevice item -->
            <!-- sevice item -->
            <div class='grid_col grid_col_4'>
                <div class='ce clearfix'>
                    <div>
                        <p style="text-align: center;"><img class="aligncenter size-full image-type noborder" src="assets/pic/2015/09/nanny_service.png" alt="nanny_service" width="150" height="150" /></p>
                        <h2 class="ce_title heading" style="text-align: center;">Nanny service</h2>
                        <p style="text-align: center;">A nanny is a person who provides child care. Typically, this care is given within the children's family setting. Throughout history, nannies were usually servants in large households and reported directly to the lady of the house.</p>
                        {{-- <p style="text-align: center;"><a href='#' class='cws_button mini'>More</a> --}}
                    </div>
                </div>
            </div>
            <!-- / sevice item -->
            <!-- sevice item -->
            <div class='grid_col grid_col_4'>
                <div class='ce clearfix'>
                    <div>
                        <p style="text-align: center;"><img class="aligncenter size-full image-type noborder" src="assets/pic/2015/09/maternity_service.png" alt="maternity_service" width="150" height="150" /></p>
                        <h2 class="ce_title heading" style="text-align: center;">Nutritionist service</h2>
                        <p style="text-align: center;">For childcare centres that provide food, this service will ensure that the food and nutrition elements of the NQS are being met.</p>
                        {{-- <p style="text-align: center;"><a href='#' class='cws_button mini'>More</a> --}}
                    </div>
                </div>
            </div>
            <!-- / sevice item -->
        </div>
        <!-- / services -->
        <!-- steps -->
        <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
            <div class='grid_col grid_col_6'>
                <div class='ce clearfix'>
                    <div>
                        <h3 class="ce_title" style=" text-align: center;">Five couses that you should choose our  <span >DAyCARe</span></h3>
                        <ul class="checkmarks_style">
                            <li>coming soon</li>
                            <li>coming soon</li>
                            <li>coming soon</li>
                            <li>coming soon</li>
                            <li>coming soon</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='grid_col grid_col_6'>
                <div class='ce clearfix'>
                    <div>
                        <p><img class="aligncenter size-full image-type noborder" src="assets/pic/2015/09/nanny.jpg" alt="nanny" width="1100" height="550" /></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- / steps -->
        <!-- divider -->
        <div class='grid_row clearfix' style='padding-bottom: 50px;'>
            <div class='grid_col grid_col_12'>
                <div class='ce clearfix'>
                    <div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- / divider -->
        <!-- teem carousel -->
         <!-- / teem carousel -->
        <!-- testimonials carousel -->
        <div class='grid_row clearfix'>
            <div class='grid_col grid_col_12'>
                <div class='ce clearfix'>
                    <div>
                        <div class='cws_sc_carousel' data-columns='2'>
                            <!-- carousel header -->
                            <div class='cws_sc_carousel_header clearfix'>
                                <div class='ce_title'>What our families say</div>
                                <div class='carousel_nav_panel'><span class='prev'></span><span class='next'></span></div>
                            </div>
                            <!-- / carousel header -->
                            <div class='cws_wrapper'>
                                <ul>
                                    <!-- testimonial item -->
                                    <li>
                                        <div class="testimonial clearfix">
                                            <div class='quote'>coming soon</div>
                                            <figure class='author'>
                                                <div class='dott'><span>.</span><span>.</span><span>.</span></div><img src='assets/pic/bfi_thumb/64x64-16148467-304vr7mbviwufsmtnwrbpm.jpg' data-at2x='assets/pic/bfi_thumb/64x64-16148467-304vr7mbviwufsmtnwrbpm@2x.jpg' alt />
                                                <figcaption>Alice Doe</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <!-- / testimonial item -->
                                    <!-- testimonial item -->
                                    <li>
                                        <div class="testimonial clearfix">
                                            <div class='quote'>coming soon</div>
                                            <figure class='author'>
                                                <div class='dott'><span>.</span><span>.</span><span>.</span></div><img src='assets/pic/bfi_thumb/64x64-our_team_2-304vqoe94rd18dffqdh05m.jpg' data-at2x='assets/pic/bfi_thumb/64x64-our_team_2-304vqoe94rd18dffqdh05m@2x.jpg' alt />
                                                <figcaption>Jane Doe</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <!-- / testimonial item -->
                                    <!-- testimonial item -->
                                    <li>
                                        <div class="testimonial clearfix">
                                            <div class='quote'>coming soon</div>
                                            <figure class='author'>
                                                <div class='dott'><span>.</span><span>.</span><span>.</span></div><img src='assets/pic/bfi_thumb/64x64-16148467-304vr7mbviwufsmtnwrbpm.jpg' data-at2x='assets/pic/bfi_thumb/64x64-16148467-304vr7mbviwufsmtnwrbpm@2x.jpg' alt />
                                                <figcaption>Alice Doe</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <!-- / testimonial item -->
                                    <!-- testimonial item -->
                                    <li>
                                        <div class="testimonial clearfix">
                                            <div class='quote'>coming soon</div>
                                            <figure class='author'>
                                                <div class='dott'><span>.</span><span>.</span><span>.</span></div><img src='assets/pic/bfi_thumb/64x64-our_team_2-304vqoe94rd18dffqdh05m.jpg' data-at2x='assets/pic/bfi_thumb/64x64-our_team_2-304vqoe94rd18dffqdh05m@2x.jpg' alt />
                                                <figcaption>Jane Doe</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <!-- / testimonial item -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- / contact us -->
    </main>
    <!-- pattern block // -->
    <div class='right-pattern pattern pattern-2'></div>
    <!-- footer image block // -->
    <div class="footer_image"></div>
</div>
 <!-- / page container -->
            <!-- svg filter -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="0" style='display:none;'>
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <!-- / svg filter -->
</div>
@endsection
