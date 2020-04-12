<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zeeko - Responsive Bootstrap 4 Landing Page Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Landinghub" />
    <link rel="stylesheet" href="{{url('/front/css/app.css')}}">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700" rel="stylesheet">

    <!-- Pe-icon-7 icon -->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">

    <!-- Bootstrap core CSS 
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">-->

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <!-- Swiper CSS 
    <link rel="stylesheet" href="css/swiper.min.css">-->

    <!-- magnific pop-up
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" /> -->

    <!--Slider
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />-->

    <!-- MENU CUSTOM css 
    <link rel="stylesheet" type="text/css" href="css/menu.css">-->

    <!-- Custom  Css 
    <link rel="stylesheet" type="text/css" href="css/style.css" />-->

</head>

<body>
@include('front.header')

   @yield('content')
</body>
    <!-- START FOOTER -->
  @include('front.footer')
    <!-- END FOOTER -->

    <!-- JAVASCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <!-- owl-carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>