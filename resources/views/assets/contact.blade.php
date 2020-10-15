@extends('assets.master')
@section('body')
<section class='page_title wave'>
    <div class='container'>
        <div class='title'>
            <h1>Contact us</h1></div>
        <nav class="bread-crumbs"><a href="index.html" >Home</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Contact us</span></nav>
        <!-- .breadcrumbs -->
    </div>
    <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
</section>
<!-- / breadcrumbs -->
<!-- main container -->
<div id="main" class="site-main">
    <div class="page_content">
        <!-- pattern container / -->
        <div class='left-pattern pattern pattern-2'></div>
        <!-- main content -->
        <main>
            <!-- map -->
            <div class='grid_row clearfix' style='padding-top: 0px;padding-bottom: 0px;'>
                <div class='grid_col grid_col_12'>
                    <div class='ce clearfix'>
                        <h3 class="ce_title">How To Find Us</h3>
                        <div class="map-border">
                            <div class="google-map">
                                <iframe src="google.com/maps/place/CSE+Building,+Daffodil+International+University/@23.7549233,90.3741778,682m/data=!3m2!1e3!4b1!4m5!3m4!1s0x3755b8ada2664e21:0x3c872fd17bc11ddb!8m2!3d23.7549184!4d90.3763665?hl=en-US" width="1170" height="450" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / map -->
            <div class='grid_row clearfix'>
                <!-- contact detail -->
                <div class='grid_col grid_col_4'>
                    <div class='ce clearfix'>
                        <h3 class="ce_title">Contact Details</h3>
                        <div>
                            <div class='cws_fa_tbl'>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell size_1x'>
                                        <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-location-arrow'></i><span class='ring'></span></div>
                                    </div>
                                    <div class='cws_fa_tbl_cell'>
                                        <h2>Address:</h2></div>
                                </div>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell'></div>
                                    <div class='cws_fa_tbl_cell'>
                                        <p>4/2, Daffodil Tower, Sobhanbag, Mirpur Rd, Dhaka 1207
                                            <br />
                                    </div>
                                </div>
                            </div>
                            <div class='cws_fa_tbl'>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell size_1x'>
                                        <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-clock-o'></i><span class='ring'></span></div>
                                    </div>
                                    <div class='cws_fa_tbl_cell'>
                                        <h2>Sunday &#8211; Thursday</h2></div>
                                </div>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell'></div>
                                    <div class='cws_fa_tbl_cell'>
                                        <p>5:45AM &#8211; 6:00PM
                                            <br />
                                    </div>
                                </div>
                            </div>
                            <div class='cws_fa_tbl'>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell size_1x'>
                                        <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-phone'></i><span class='ring'></span></div>
                                    </div>
                                    <div class='cws_fa_tbl_cell'>
                                        <h2>Phones:</h2></div>
                                </div>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell'></div>
                                    <div class='cws_fa_tbl_cell'>
                                        <p><a href="tel:1-800-123-45678"> +880 1722222222</a>
                                            <br />
                                            <a href="tel:1-800-123-45679"> +880 1738444444</a>
                                            <br />
                                    </div>
                                </div>
                            </div>
                            <div class='cws_fa_tbl'>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell size_1x'>
                                        <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-envelope'></i><span class='ring'></span></div>
                                    </div>
                                    <div class='cws_fa_tbl_cell'>
                                        <h2>E-mail:</h2></div>
                                </div>
                                <div class='cws_fa_tbl_row'>
                                    <div class='cws_fa_tbl_cell'></div>
                                    <div class='cws_fa_tbl_cell'>
                                        <p><a href="mailto:badhonsarkar518@gmail.com">badhonsarkar518@gmail.com</a>
                                            <br />
                                            {{-- <a href="http://www.creaws.com/"> www.creaws.com</a>
                                            <br /> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / contact detail -->
                <!-- contact form -->
                <div class='grid_col grid_col_8'>
                    <div class='ce clearfix'>
                        <h3 class="ce_title">Drop us a line</h3>
                        <div>
                            <div role="form" class="cf" id="cf-f16-p10-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="http://html.cwsthemes.com/kiddy/php/contacts-process.php" method="post" class="cf-form contact-form" novalidate="novalidate">
                                    <p>Name*
                                        <br />
                                        <span class="cf-form-control-wrap your-name"><input type="text" name="name" value="" size="107" class="cf-form-control cf-text cf-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
                                    <p>Email*
                                        <br />
                                        <span class="cf-form-control-wrap your-email"><input type="email" name="email" value="" size="107" class="cf-form-control cf-text cf-email cf-validates-as-required cf-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
                                    <p>Message
                                        <br />
                                        <span class="cf-form-control-wrap your-message"><textarea name="message" cols="107" rows="8" class="cf-form-control cf-textarea" aria-invalid="false"></textarea></span> </p>
                                    <p>
                                        <input type="submit" value="Send" class="cf-form-control cf-submit" />
                                    </p>
                                    <div class="cws_msg_box error-box clearfix">
                                        <div class="icon_section"><i class="fa fa-exclamation"></i></div>
                                        <div class="content_section">
                                            <div class="msg_box_title">Error box</div>
                                            <div class="msg_box_text"></div>
                                        </div>
                                    </div>
                                </form>
                                <div class="email_server_responce"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / conatct form -->
            </div>
        </main>
        <!-- / main content -->
        <!-- patter container / -->
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
