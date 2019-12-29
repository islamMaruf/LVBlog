<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('asset/frontend') }}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>LVBlog</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:500" rel="stylesheet">
    <!--=================== CSS ========================== -->
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('asset/frontend') }}/css/main.css">
</head>

<body>
<!--================ Start header Top Area =================-->
<section class="header-top">
   @include('frontend.partials.header-top')
</section>
<!--================ End header top Area =================-->

<!-- Start header Area -->
<header id="header">
@include('frontend.partials.header')
</header>
<!-- End header Area -->

<!-- Start Post Silder Area -->
<section class="post-slider-area">
   @include('frontend.partials.post-slider-area')
</section>
<!-- Start Post Silder Area -->

<!-- Start main body Area -->
<div class="main-body section-gap">
    <div class="container box_1170">
       @include('frontend.partials.main-body.body')
    </div>
</div>
<!-- Start main body Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    @include('frontend.partials.footer.footer')
</footer>
<!-- End footer Area -->

<script src="{{ asset('asset/frontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('asset/frontend') }}/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('asset/frontend') }}/js/easing.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/hoverIntent.js"></script>
<script src="{{ asset('asset/frontend') }}/js/superfish.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/jquery.tabs.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/waypoints.min.js"></script>
<script src="{{ asset('asset/frontend') }}/js/mail-script.js"></script>
<script src="{{ asset('asset/frontend') }}/js/main.js"></script>
</body>

</html>
