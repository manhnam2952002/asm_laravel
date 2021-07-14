<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Account</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor content-bodyCSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
@yield('page_css')

<!-- Theme CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{URL::asset('assets/vendor/modernizr/modernizr.js')}}"></script>

</head>
<body>
<section class="body">
        <section role="main" class="content-body">
            @yield('content')
        </section>
    </div>

</section>

<!-- Vendor -->
<script src="{{URL::asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{URL::asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
@yield('page_js')

<!-- Theme Base, Components and Settings -->
<script src="{{URL::asset('assets/javascripts/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{URL::asset('assets/javascripts/theme.custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{URL::asset('assets/javascripts/theme.init.js')}}"></script>

<!-- Examples -->
<script src="{{URL::asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script>

</body>
</html>
