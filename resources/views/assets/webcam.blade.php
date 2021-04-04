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

        </br>


            <head>
            <meta charset="utf-8">
            <title>Display Webcam Stream</title>

            <style>
            #container {
                margin: 0px auto;
                width: 500px;
                height: 375px;
                border: 10px #333 solid;
            }
            #videoElement {
                width: 500px;
                height: 375px;
                background-color: #666;
            }
            </style>
            </head>

            <body>
            <div id="container">
                <video autoplay="true" id="videoElement">

                </video>
            </div>
            <script>
                var video = document.querySelector("#videoElement");

                if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                    video.srcObject = stream;
                    })
                    .catch(function (err0r) {
                    console.log("Something went wrong!");
                    });
                }

                function stop(e) {
                var stream = video.srcObject;
                var tracks = stream.getTracks();

                for (var i = 0; i < tracks.length; i++) {
                    var track = tracks[i];
                    track.stop();
                }

                video.srcObject = null;
                }
            </script>
            </body>







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
