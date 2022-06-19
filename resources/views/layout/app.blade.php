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

    <!--====== TITLE TAG ======-->
    <title>Appton Apps Landing Template</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{url('assest/img/favicon.png')}}" />

    @include("layout._include_css")
    @include("layout._include_js")


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            @include("layout._navbar")
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->

    @yield("content")





    <br>

    <!--FOOER AREA-->
   @include("layout.footer")
    <!--FOOER AREA END-->



</body>

</html>
