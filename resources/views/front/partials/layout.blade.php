<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title') | PUBG Calculator</title>

    <meta name="description" content="PUBG Calculator - Platform to calculate point on PUBG Tournament.">
    <meta name="keywords" content="gaming, game, community, template, html, bootstrap, webpack, pubg, pubg mobile, player unknown battlegrounds, pubgm, tencent, steam">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="{{ asset('front/assets/images/dark/icon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Open+Sans:400,700">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" />

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/flickity/dist/flickity.min.css') }}" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/magnific-popup/dist/magnific-popup.css') }}" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/slider-revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/slider-revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/slider-revolution/css/navigation.css') }}">

    <!-- Bootstrap Sweetalert -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap-sweetalert/dist/sweetalert.css') }}" />

    <!-- Social Likes -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/social-likes/dist/social-likes_flat.css') }}" />

    <!-- FontAwesome -->
    <script defer src="{{ asset('front/assets/vendor/font-awesome/svg-with-js/js/fontawesome-all.min.js') }}"></script>
    <script defer src="{{ asset('front/assets/vendor/font-awesome/svg-with-js/js/fa-v4-shims.min.js') }}"></script>

    <!-- Youplay -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/youplay-shooter.css') }}">

    <!-- RTL (uncomment this to enable RTL support) -->
    <!-- <link rel="stylesheet" href="front/assets/css/youplay-rtl.min.css" /> -->

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom-shooter.css') }}">
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{ asset('front/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    
    @yield('custom_css')

</head>


<body>
    
        <!-- Preloader -->
<div class="page-preloader preloader-wrapp">
    
        <img src="{{ asset('front/assets/images/shooter/logo.png') }}" alt="">
    
    <div class="preloader"></div>
</div>
<!-- /Preloader -->


<!-- Navbar -->
@include('front.partials.nav')
<!-- /Navbar -->


@yield('content')    


<!-- Footer -->
<footer class="youplay-footer">
    

    <div class="wrapper">

        
            <!-- Copyright -->
            @include('front.partials.footer')
            <!-- /Copyright -->
        
    </div>
</footer>
<!-- /Footer -->

        
    </div>

    

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="{{ asset('front/assets/vendor/object-fit-images/dist/ofi.min.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('front/assets/vendor/jquery/dist/jquery.min.js') }}"></script>

<!-- Hexagon Progress -->
<script src="{{ asset('front/assets/vendor/HexagonProgress/jquery.hexagonprogress.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('front/assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Jarallax -->
<script src="{{ asset('front/assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>

<!-- Flickity -->
<script src="{{ asset('front/assets/vendor/flickity/dist/flickity.pkgd.min.js') }}"></script>

<!-- jQuery Countdown -->
<script src="{{ asset('front/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>

<!-- Moment.js -->
<script src="{{ asset('front/assets/vendor/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('front/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('front/assets/vendor/slider-revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/slider-revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- ImagesLoaded -->
<script src="{{ asset('front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('front/assets/vendor/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>

<!-- Bootstrap Validator -->
<script src="{{ asset('front/assets/vendor/bootstrap-validator/dist/validator.min.js') }}"></script>

<!-- Bootstrap Sweetalert -->
<script src="{{ asset('front/assets/vendor/bootstrap-sweetalert/dist/sweetalert.min.js') }}"></script>

<!-- Social Likes -->
<script src="{{ asset('front/assets/vendor/social-likes/dist/social-likes.min.js') }}"></script>

<!-- Youplay -->
<script src="{{ asset('front/assets/js/youplay.min.js') }}"></script>
<script src="{{ asset('front/assets/js/youplay-init.js') }}"></script>


<script>
  $(".countdown").each(function() {
      $(this).countdown($(this).attr('data-end'), function(event) {
        $(this).html(
            event.strftime([
                '<div class="countdown-item">',
                    '<span>Days</span>',
                    '<span><span>%D</span></span>',
                '</div>',
                '<div class="countdown-item">',
                    '<span>Hours</span>',
                    '<span><span>%H</span></span>',
                '</div>',
                '<div class="countdown-item">',
                    '<span>Minutes</span>',
                    '<span><span>%M</span></span>',
                '</div>',
                '<div class="countdown-item">',
                    '<span>Seconds</span>',
                    '<span><span>%S</span></span>',
                '</div>'
            ].join(''))
        );
      });
  });
</script>

@yield('custom_js')
<!-- END: Scripts -->


    
</body>
</html>
