@extends('assets.master')
@section('body')
<br>
    <!-- breadcrumbs -->
    <section class='page_title wave'>
        <div class='container'>
            <div class='title'>
             <h1>Registration</h1></div>
                <nav class="bread-crumbs"><a href="index.html" >Home</a><i class="delimiter fa fa-chevron-right"></i><span class="current">registration</span></nav>
                <!-- .breadcrumbs -->
            </div>
            <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>

    </section>
        <!-- / bredcrumbs -->
        <!-- main container -->
        <div id="main" class="site-main">
            <div class="page_content">
                <!-- pattern container / -->
                <div class='left-pattern pattern pattern-2'></div>
                <div class='container'>
                    <main>
                        <div class='grid_row clearfix'>
                            <div class='grid_col grid_col_12'>
                                <div class='ce clearfix'>
                                    <div>
                                        <div class="woocommerce">
                                            <div class="grid_row clearfix">
                                               </div>

                                                <!-- coupon form -->
                                                <div class="woocommerce-info">Have a account? <a href="http://127.0.0.1:8000/admin/login" class="showcoupon">Click here to login</a></div>

                                                <!-- / coupone form -->
                                                <!-- checkout form -->
                                                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="#" enctype="multipart/form-data">
                                                    <!-- customer details form -->
                                                    <div class="col2-set" id="customer_details">
                                                        <div class="col-1">
                                                            <div class="woocommerce-billing-fields">
                                                                <h3>Request a registration for your baby</h3>
                                                                <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                                                    <label for="billing_first_name" class="">Baby's Name
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" />
                                                                </p>
                                                                <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                                                    <label for="billing_last_name" class="">Birth certificate image
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="file" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" />
                                                                </p>
                                                                <div class="clear"></div>
                                                                <label for="billing_company" class="">Gender</label>
                                                                <p class="form-row form-row form-row-wide" id="billing_company_field">
                                                                </p>
                                                                <p class="form-row form-row form-row-wide" id="billing_company_field">
                                                                    <label for="billing_company" class="">male</label>
                                                                    <input type="radio" class="input-radio " name="billing_company" id="billing_company" placeholder="" value="" />
                                                                </p>
                                                                <p class="form-row form-row form-row-wide" id="billing_company_field">
                                                                    <label for="billing_company" class="">female</label>
                                                                    <input type="radio" class="input-radio " name="billing_company" id="billing_company" placeholder="" value="" />
                                                                </p>
                                                                <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                                                    <label for="billing_first_name" class="">Father's name
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" />
                                                                </p>
                                                                <div class="clear"></div>

                                                                <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                                                    <label for="billing_first_name" class="">mother's Name
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" />
                                                                </p>
                                                                <div class="clear"></div>


                                                                <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                                                    <label for="billing_email" class="">Email Address
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" />
                                                                </p>
                                                                <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                                                    <label for="billing_phone" class="">Phone
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" />
                                                                </p>
                                                                <div class="clear"></div>


                                                                </p>
                                                                <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                                                    <label for="billing_address_1" class="">Address
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="" />
                                                                </p>


                                                                <div class="clear"></div>
                                                                <p class="cf-form-control-wrap your-message">
                                                                    <input class="cf-form-control cf-submit" type="submit" name="createaccount" value="submit" />
                                                                </p>

                                                        </div>

                                                    </div>
                                                    <!-- / customer details form -->

                                                        </div>
                                                        <!-- / payment methods -->
                                                    </div>
                                                </form>
                                                <!-- / checkout form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <!-- pattern container / -->
                <div class='right-pattern pattern pattern-2'></div>
                <!-- footer image container / -->
                <div class="footer_image"></div>
            </div>
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
