@extends('assets.master')
@section('body')
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
    <!-- START REVOLUTION SLIDER 5.0.9 fullwidth mode -->

</div>
<section class='page_title wave'>
    <div class='container'>
        <div class='title'>
            <h1>Gallery</h1></div>
        <nav class="bread-crumbs"><a href="index.html" >Home</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Gallery</span></nav>
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
            <div class='grid_row clearfix'>
                <div class='grid_col grid_col_12'>
                    <div class='ce clearfix'>
                        <div>
                            <div id='gallery-1' class='gallery galleryid-1871 gallery-columns-3 gallery-size-large'>
                                <!-- gallery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/02/blog_3_col_2.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/02/blog_3_col_2-1024x1024.jpg" class="attachment-large" alt="blog_3_col_2" /></a>
                                    </div>
                                </div>
                                <!-- / galery item -->
                                <!-- galery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/02/blog_3_col_1.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/02/blog_3_col_1-1024x1024.jpg" class="attachment-large" alt="blog_3_col_1" /></a>
                                    </div>
                                </div>
                                <!-- / galery item -->
                                <!-- galery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/04/pic_double_sidebar_1.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/04/pic_double_sidebar_1-1024x1024.jpg" class="attachment-large" alt="pic_double_sidebar_1" /></a>
                                    </div>
                                </div>
                                <br style="clear: both" />
                                <!-- gallery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/04/pic_typorgaphy.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/04/pic_typorgaphy-1024x1024.jpg" class="attachment-large" alt="pic_typorgaphy" /></a>
                                    </div>
                                </div>
                                <!-- / galery item -->
                                <!-- galery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/08/portfolio_7.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/08/portfolio_7-1024x1024.jpg" class="attachment-large" alt="portfolio_7" /></a>
                                    </div>
                                </div>
                                <!-- / galery item -->
                                <!-- galery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/08/portfolio_4.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/08/portfolio_4-1024x1024.jpg" class="attachment-large" alt="portfolio_4" /></a>
                                    </div>
                                </div>
                                <!-- / gallery item -->
                                <br style="clear: both" />
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/08/portfolio_2.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/08/portfolio_2-1024x1024.jpg" class="attachment-large" alt="portfolio_2" /></a>
                                    </div>
                                </div>
                                <!-- / galery item -->
                                <!-- galery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/08/portfolio_1.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/08/portfolio_1-1024x1024.jpg" class="attachment-large" alt="portfolio_1" /></a>
                                    </div>
                                </div>
                                <!-- / galery item -->
                                <!-- galery item -->
                                <div class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='assets/pic/2015/03/blog_3_col_4.jpg' class='fancy'><img width="1024" height="1024" src="assets/pic/2015/03/blog_3_col_4-1024x1024.jpg" class="attachment-large" alt="blog_3_col_4" /></a>
                                    </div>
                                </div>
                                <!-- / gallery item -->
                                <br style="clear: both" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- / main content -->
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
