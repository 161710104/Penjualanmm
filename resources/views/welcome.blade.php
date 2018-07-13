<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!--====== TITLE TAG ======-->
    <title>Cars-Dream.com</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="/assest/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link href="/assest/css/plugins.css" rel="stylesheet">
    <link href="/assest/css/theme.css" rel="stylesheet">
    <link href="/assest/css/icons.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="/assest/css/style.css" rel="stylesheet">
    <link href="/assest/css/responsive.css" rel="stylesheet">

    <script src="/assest/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">
        .map-responsive{    overflow:hidden;    padding-bottom:56.25%;    position:relative;    height:0; } .map-responsive iframe{    left:0;    top:0;    height:100%;    width:100%;    position:absolute; }
    </style>
</head>

<script>
      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
      }
    </script>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90" onload="startTime()">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    @include('frontend.partials.header')
    <!--FEATURES TOP AREA-->
    @include('frontend.partials.headerbottom')
    <!--FEATURES TOP AREA END-->
    @include('frontend.partials.section')

    @include('frontend.partials.berita')
    
    @include('frontend.partials.map')

    @include('frontend.partials.footer')

    <!--====== SCRIPTS JS ======-->
    <!--Start of Tawk.to Script-->
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
    <script src="/assest/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assest/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="/assest/js/vendor/jquery.easing.1.3.js"></script>
    <script src="/assest/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assest/js/vendor/jquery.appear.js"></script>
    <script src="/assest/js/owl.carousel.min.js"></script>
    <script src="/assest/js/stellar.js"></script>
    <script src="/assest/js/waypoints.min.js"></script>
    <script src="/assest/js/jquery.counterup.min.js"></script>
    <script src="/assest/js/wow.min.js"></script>
    <script src="/assest/js/jquery-modal-video.min.js"></script>
    <script src="/assest/js/stellarnav.min.js"></script>
    <script src="/assest/js/placeholdem.min.js"></script>
    <script src="/assest/js/contact-form.js"></script>
    <script src="/assest/js/jquery.ajaxchimp.js"></script>
    <script src="/assest/js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="/assest/js/main.js"></script>
</body>

</html>
