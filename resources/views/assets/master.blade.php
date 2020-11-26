<!DOCTYPE html>
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="assets/img/cropped-favicon-192x192.png" />
    <title>DAyCARe</title>
    <link rel='stylesheet' href='assets/revslider/css/settings.css' type='text/css' media='all' />

    <link rel='stylesheet' href='assets/css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/select2.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/shop.css' type='text/css' media='all' />
    <link rel='stylesheet' href='tuner/style.css' type='text/css' media='all' />
    <script type='text/javascript' src='assets/js/jquery.js'></script>
    <script type='text/javascript' src='assets/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='assets/revslider/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='assets/revslider/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="assets/revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/revslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/revslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <link rel="icon" href="assets/img/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="assets/img/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="assets/img/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage" content="assets/img/cropped-favicon-270x270.png">
</head>

<body class="home page wide wave-style">
    <div class="page">
        <!-- top panel -->
        <div class='site_top_panel wave slider'>
            <!-- canvas -->
            <div class='top_half_sin_wrapper'>
                <canvas class='top_half_sin' data-bg-color='#ffffff' data-line-color='#ffffff'></canvas>
            </div>
            <!-- / canvas -->
            <div class='container'>
                <div class='row_text_search'>
                    <div id='top_panel_text'><a href="tel:+8801761374611"><i class="fa fa-phone-square"></i> +880 1795444444 </a>;
                        <a href="mailto:badhonsarkar518@gmail.com"> <i class="fa fa-envelope-o"></i>badhonsarkar518@gmail.com</a>
                    </div>
                    <form method="get" class="search-form" action="#">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="text" class="search-field vova" value="" name="s" title="Search for:" />
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                        <input type='hidden' name='lang' value='en' />
                    </form>
                </div>
                <div id='top_panel_links'>
                    <div class='search_icon'></div>
                    <div id='top_social_links_wrapper'>
                        <div class='share-toggle-button'><i class='share-icon fa fa-share-alt'></i></div>
                        <div class='cws_social_links'><a href='http://twitter.com/' class='cws_social_link' title='Twitter'><i class='share-icon fa fa-twitter'></i></a><a href='http://facebook.com/' class='cws_social_link' title='Facebook'><i class='share-icon fa fa-facebook'></i></a><a href='http://dribbble.com/' class='cws_social_link' title='Dribbble'><i class='share-icon fa fa-dribbble'></i></a><a href='https://plus.google.com/' class='cws_social_link' title='Google'><i class='share-icon fa fa-google-plus'></i></a></div>
                    </div>




                </div>
                <div class="site_top_panel_toggle"></div>
            </div>
        </div>



        <!-- / top panel -->
        <!-- slider and menu container -->
        <div class='slider_vs_menu'>
            <div class='header_cont'>
                <div class='header_mask'>
                    <div class='header_pattern'></div>
                </div>
                <header class='site_header logo-in-menu' data-menu-after="3">
                    <div class="header_box">
                        <div class="container">
                            <!-- logo -->
                            <div class="header_logo_part with_border" role="banner">
                                <a class="logo" href="{{asset('/')}}"><img src='assets/img/logo1.png' data-at2x='' alt /></a>
                            </div>
                            <!-- / logo -->
                            <!-- menu -->
                            <div class="header_nav_part">
                                <nav class="main-nav-container a-right">
                                    <div class="mobile_menu_header">
                                        <i class="mobile_menu_switcher"><span></span><span></span><span></span></i>
                                    </div>
                                    <ul id="menu-main-menu" class="main-menu menu-bees">
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children">
                                            <a href="{{asset('/')}}">
                                                <div class="bees bees-start"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Home
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                            <span class='button_open'></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>
                                                </li>
                                                <li class="menu-item current-menu-item page_item current_page_item"><a href="{{asset('/contact')}}">How to find us</a></li>
                                                <li class="menu-item"><a href="{{asset('/package')}}">Package</a></li>
                                                <!--  -->
                                            </ul>
                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children"><a href="{{asset('/package')}}">Package<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>

                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children"><a href="{{asset('/about')}}">About<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>

                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children right"><a href="{{asset('/gallery')}}">Gallery<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>

                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->

                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children">
                                            <a href="{{asset('/monitor')}}">
                                                <div class="menu-item right bees-end"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Monitor
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                            <span class='button_open'></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>
                                                </li>
                                                <li class="menu-item current-menu-item page_item current_page_item"><a href="http://127.0.0.1:8000/admin/login">login</a></li>
                                                <li class="menu-item"><a href="{{asset('/userregi')}}">Registration</a></li>
                                                <!--  -->
                                            </ul>
                                        </li>


                                        <li class="menu-item right bees-end">
                                            <a href="{{asset('/contact')}}">
                                                <div class="bees bees-end"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Contact
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- / menu item -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- / menu -->
                        </div>
                    </div>
                </header>
                <!-- #masthead -->
            </div>


@yield('body')

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
        <!-- #main -->
        <!-- footer -->
  <div class='footer_wrapper_copyright'>
            <!-- canvas -->
            <div class='half_sin_wrapper'>
                <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
            </div>
            <!--       / canvas -->
            <footer class='page_footer'>
                <div class='container'>
                    <div class='footer_container'>
                        <!-- widget post -->
                        <div class="cws-widget">
                            <div class="widget-title">TEAM</div>
                            <div class='widget_carousel'>
                                <div class='item'>
                                    <!-- post item -->
                                    <div class='post_item'>
                                        <div class='post_preview clearfix'>
                                            <a href='badhon35-2092@diu.edu.bd' class='post_thumb_wrapp pic'><img class='post_thumb' src='assets/pic/bfi_thumb/badhon.jpg' data-at2x='assets/pic/bfi_thumb/58x58-portfolio_7-304vqm0b4ukllinncov4ei@2x.jpg' alt />
                                                <div class='hover-effect'></div>
                                                <div class='links'><span class='fa fa-link'></span></div>
                                            </a>
                                            <div class='post_title'><a href='blog-post.html'>Badhon Sarkar</a></div>
                                            <div class='post_content'> <a href='badhon35-2092@diu.edu.bd'>badhon35-2092@diu.edu.bd</a></div>
                                            <div class='post_date'>Designer,Developer</div>
                                        </div>
                                    </div>
                                    <!-- / post item -->
                                    <!-- post item -->
                                    <div class='post_item'>
                                        <div class='post_preview clearfix'>
                                            <a href='hedaitul35-2156@diu.edu.bd' class='post_thumb_wrapp pic'><img class='post_thumb' src='assets/pic/bfi_thumb/toha.jpg' data-at2x='assets/pic/bfi_thumb/58x58-blog_3_col_3-304vqj49s4b9oehlhrm1hm@2x.jpg' alt />
                                                <div class='hover-effect'></div>
                                                <div class='links'><span class='fa fa-link'></span></div>
                                            </a>
                                            <div class='post_title'><a href='blog-post.html'>Hedaitul Islam</a></div>
                                            <div class='post_content'><a href='hedaitul35-2156@diu.edu.bd'>hedaitul35-2156@diu.edu.bd</a></div>
                                            <div class='post_date'>Developer</div>
                                        </div>
                                    </div>
                                    <!-- / post item -->
                                    <!-- post item -->
                                    <div class='post_item'>
                                        <div class='post_preview clearfix'>
                                            <a href='mehedi35-2134@diu.edu.bd' class='post_thumb_wrapp pic'><img class='post_thumb' src='assets/pic/bfi_thumb/mehedi.jpg' data-at2x='assets/pic/bfi_thumb/58x58-portfolio_4-304vqkvlk7rwl2xsvw77yi@2x.jpg' alt />
                                                <div class='hover-effect'></div>
                                                <div class='links'><span class='fa fa-link'></span></div>
                                            </a>
                                            <div class='post_title'><a href='#'>Mehedi Hasan</a></div>
                                            <div class='post_content'><a href='mehedi35-2134@diu.edu.bd'>mehedi35-2134@diu.edu.bd</a></div>
                                            <div class='post_date'>Developer</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- / widget post -->
                        <!-- twitter -->
                        <div class="cws-widget">
                            <div class="widget-title">Navigation</div>
                            <div class='cws_tweets tweets_carousel paginated'>
                                <div class='post_content'><a href='{{asset('/')}}'>Home</a></div> <p>
                                    <div class='post_content'><a href='{{asset('/package')}}'>Package</a><p></div> <p>
                                        <div class='post_content'><a href='{{asset('/monitor')}}'>Monitor</a><p></div> <p>
                                            <div class='post_content'><a href='{{asset('/gallery')}}'>Gallery</a><p></div> <p>
                                                <div class='post_content'><a href='{{asset('/about')}}'>About</a><p></div> <p>
                                                    <div class='post_content'><a href='{{asset('/contact')}}'>Contact</a><p></div>
                            </div>
                        </div>
                        <!-- / twitter -->
                        <!-- widget gallery -->
                        <div class="cws-widget">
                            <div class="widget-title">Gallery</div>
                            <div class='cws_textwidget_content'>
                                <div class='text'>
                                    <div id='gallery-2' class='gallery galleryid-2288 gallery-columns-3 gallery-size-thumbnail'>
                                        <!-- gallery item -->
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im2.jpg" class="attachment-thumbnail" alt="blog_3_col_2" />
                                            </div>
                                        </div>
                                        <!-- / galery item -->
                                        <!-- galery item -->
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im1.jpg" class="attachment-thumbnail" alt="blog_3_col_1" />
                                            </div>
                                        </div>
                                        <!-- / galery item -->
                                        <!-- galery item -->
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im6.jpg" class="attachment-thumbnail" alt="pic_double_sidebar_1" />
                                            </div>
                                        </div>
                                        <br style="clear: both" />
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im3.jpg" class="attachment-thumbnail" alt="pic_typorgaphy" />
                                            </div>
                                        </div>
                                        <!-- / galery item -->
                                        <!-- galery item -->
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im1.jpg" class="attachment-thumbnail" alt="portfolio_3" />
                                            </div>
                                        </div>
                                        <!-- / galery item -->
                                        <!-- galery item -->
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im2.jpg" class="attachment-thumbnail" alt="portfolio_6" />
                                            </div>
                                        </div>
                                        <br style="clear: both" />
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im3.jpg" class="attachment-thumbnail" alt="portfolio_4" />
                                            </div>
                                        </div>
                                        <!-- / galery item -->
                                        <!-- galery item -->
                                        <div class='gallery-item'>
                                            <div class='gallery-icon landscape'>
                                                <img width="150" height="150" src="assets/pic/2015/08/im4.jpg" class="attachment-thumbnail" alt="portfolio_7" />
                                            </div>
                                        </div>
                                        <!-- / galery item -->
                                        <!-- galery item -->
                                        <div class='gallery-item'>
                                            <div class='gallery-icon'>
                                                <img width="1" height="1" src="assets/pic/2015/08/im5.jpg" class="attachment-thumbnail" alt="blog_3_col_3" />
                                            </div>
                                        </div>
                                        <!-- / gallery item -->
                                        <br style="clear: both" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / widget gallery -->
                        <!-- conatact form -->
                        <div class="cws-widget">
                            <div class="widget-title">Shoot a Message</div>
                            <div class="textwidget">
                                <div role="form" class="cf" id="cf-f1705-o1" lang="en-US" dir="ltr">
                                    <!-- <div class="screen-reader-response"></div> -->
                                    <form action="" method="post" class="cf-form contact-form" novalidate="novalidate">
                                        <p><span class="cf-form-control-wrap your-name"><input type="text" name="name" value="" size="60" class="" aria-required="true" aria-invalid="false" placeholder="Name" /></span></p>
                                        <p><span class="cf-form-control-wrap your-email"><input type="email" name="email" value="" size="60" class="" aria-required="true" aria-invalid="false" placeholder="E-mail" /></span></p>
                                        <p><span class="cf-form-control-wrap your-message"><textarea name="message" cols="39" rows="6" class="" aria-invalid="false" placeholder="Message"></textarea></span></p>
                                        <p>
                                            <input type="submit" value="Send" class="cf-form-control cf-submit" />
                                        </p>
                                    </form>
                                    <div class="email_server_responce"></div>
                                </div>
                            </div>
                        </div>
                        <!-- / contact form -->
                    </div>
                </div>
            </footer>
            <!-- copyright -->
            <div class='copyrights_area'>
                <!-- canvas -->
                <div class='half_sin_wrapper'>
                    <canvas class='footer_half_sin' data-bg-color='14,64,77' data-line-color='14,64,77'></canvas>
                </div>
                <!-- / canvas -->
                <div class='container'>
                    <div class='copyrights_container'>
                        <div class='copyrights'><a target="_blank">All Rights Reserves to-DAyCARe_TEAM  </a></div>
                        <div class='copyrights_panel'>
                            <div class='copyrights_panel_wrapper'>

                                <div class='cws_social_links'><a href='http://twitter.com/' class='cws_social_link' title='Twitter'>
                                    <i class='share-icon fa fa-twitter'></i></a><a href='http://facebook.com/' class='cws_social_link' title='Facebook'>
                                        <i class='share-icon fa fa-facebook'></i></a><a href='http://dribbble.com/' class='cws_social_link' title='Dribbble'>
                                            <i class='share-icon fa fa-dribbble'></i></a><a href='https://plus.google.com/' class='cws_social_link' title='Google'>
                                                <i class='share-icon fa fa-google-plus'></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / copyright -->
        </div>
    </div>
    <!-- #page -->
    <div class='scroll_top animated'></div>
    <!-- <div id="lang_sel_footer">
        <ul>
            <li>
                <a href="{{asset('/')}}" class="lang_sel_sel"><img src="assets/img/en.png" alt="English" class="iclflag" title="English" />&nbsp;English</a>
            </li>
            <li>
                <a href="#"><img src="assets/img/fr.png" alt="Français" class="iclflag" title="Français" />&nbsp;Français</a>
            </li>
            <li>
                <a href="#"><img src="assets/img/de.png" alt="Deutsch" class="iclflag" title="Deutsch" />&nbsp;Deutsch</a>
            </li>
        </ul>
    </div> -->


    <script type='text/javascript' src='tuner/tuner/js/colorpicker.js'></script>
    <script type='text/javascript' src='tuner/tuner/js/scripts.js'></script>
    <script type='text/javascript' src='assets/js/retina_1.3.0.js'></script>
    <script type='text/javascript' src='assets/js/modernizr.js'></script>
    <script type='text/javascript' src='assets/js/owl.carousel.js'></script>
    <script type='text/javascript' src='assets/js/TweenMax.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='assets/js/select2.min.js'></script>
    <script type='text/javascript' src='assets/js/wow.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src="assets/js/jquery.form.min.js"></script>
    <script type='text/javascript' src='assets/js/scripts.js'></script>
    <script type='text/javascript' src="assets/js/jquery.tweet.js"></script>
</body>


</html>
