<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    @yield('title')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('cloapedia/images/gau-icon.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('cloapedia/images/gau-icon.png')}}">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <link href="{{asset('cloapedia/css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{asset('cloapedia/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('cloapedia/style.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{asset('cloapedia/css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{asset('cloapedia/css/colors.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.{{asset('cloapedia/js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>
     <!-- LOADER -->
     <div id="preloader">
        <img class="preloader" src="{{asset('cloapedia/images/loader.gif')}}" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    @include('frontend.components.search')
    @include('frontend.components.topbar')
    @include('frontend.components.header')
    @yield('content')
    @include('frontend.components.footer')


<!-- Core JavaScript
    ================================================== -->
    <script src="{{asset('cloapedia/js/jquery.min.js')}}"></script>
    <script src="{{asset('cloapedia/js/tether.min.js')}}"></script>
    <script src="{{asset('cloapedia/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cloapedia/js/custom.js')}}"></script>
</body>

</html>
