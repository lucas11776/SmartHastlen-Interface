<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/app/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="assets/app/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/app/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/app/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/app/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/app/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="assets/app/styles/responsive.css">
    <!-- Page Required JavaScript Plugin load -->
    <script src="assets/app/js/jquery-3.2.1.min.js"></script>
</head>
<body>

@yield('content');

<script src="assets/app/styles/bootstrap-4.1.2/popper.js"></script>
<script src="assets/app/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="assets/app/plugins/greensock/TweenMax.min.js"></script>
<script src="assets/app/plugins/greensock/TimelineMax.min.js"></script>
<script src="assets/app/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="assets/app/plugins/greensock/animation.gsap.min.js"></script>
<script src="assets/app/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="assets/app/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/app/plugins/easing/easing.js"></script>
<script src="assets/app/plugins/progressbar/progressbar.min.js"></script>
<script src="assets/app/plugins/parallax-js-master/parallax.min.js"></script>
<script src="assets/app/js/custom.js"></script>
</body>
</html>
