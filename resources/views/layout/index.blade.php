<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>XVI Congresso Nacional de Psiquiatria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="XVI Congresso Nacional de Psiquiatria"/>
    <meta name="keywords" content="XVI Congresso Nacional de Psiquiatria"/>
    <meta name="author" content="codeboys.pt"/>


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <script src="{{asset("js/modernizr-2.6.2.min.js")}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset("js/respond.min.js")}}"></script>
    <![endif]-->

</head>
<body>
@include("layout.partials.header")
<!-- END .header -->

@if(Route::currentRouteName() == "home")
@include("layout.partials.slider")
@endif

<div id="fh5co-main">
    @yield("content")
</div>

@include("layout.partials.footer")


<!-- jQuery -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/jquery.easing.1.3.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
<script>
    $(document).ready(function () {
        if ($(window).width() <= 768) {
            let slide1 = "images/slide_1_mobile.png"
            $('#slide1').css('background-image', 'url(' + slide1 + ')');
        }
    })

    $(document).ready(function(){

        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');

            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });
</script>

</body>
</html>
