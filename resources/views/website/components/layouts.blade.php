
<!DOCTYPE html>
    <html lang="en">
<head>
        <meta charset="utf-8" />
        <title>  @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Shreethemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{asset('public/website/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="{{asset('public/website/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icon -->
        <link href="{{asset('public/website/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
                  
        <!-- SLICK SLIDER -->
        <link rel="stylesheet" href="{{asset('public/website/css/owl.carousel.min.css')}}"/> 
        <link rel="stylesheet" href="{{asset('public/website/css/owl.theme.css')}}"/> 
        <link rel="stylesheet" href="{{asset('public/website/css/owl.transitions.css')}}"/>    
        <!-- Custom Css -->
        <link href="{{asset('public/website/css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/website/css/colors/default.css')}}" rel="stylesheet" id="color-opt">

    </head>

    <body>
     <!-- Loader -->
     <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="images/logo.png" height="20" class="d-block mx-auto" alt="">
                </div>
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
              
      
        @yield('content')
      
       

        <!-- javascript -->
        <script src="{{asset('public/website/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/website/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/website/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('public/website/js/scrollspy.min.js')}}"></script>
        <!-- SLIDER -->
        <script src="{{asset('public/website/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('public/website/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/website/js/isotope.js')}}"></script>
        <script src="{{asset('public/website/js/portfolio-filter.js')}}"></script> 
        <script src="{{asset('public/website/js/magnific.init.js')}}"></script> 
        <!-- Contact -->
        <script src="{{asset('public/website/js/contact.js')}}"></script>
        <!-- Counter -->
        <script src="{{asset('public/website/js/counter.init.js')}}"></script>
        <!-- Tweenmax Js -->
        <script src="{{asset('public/website/js/jquery-twennmax.js')}}"></script>
        <script src="{{asset('public/website/js/TweenMax.min.js')}}"></script>
        <script src="{{asset('public/website/js/jquery-twennmax.init.js')}}"></script>
        <!-- Feather icon -->
        <script src="{{asset('public/website/js/feather.min.js')}}"></script>
        <!-- Switcher -->
        <script src="{{asset('public/website/js/switcher.js')}}"></script>
        <!-- Main Js -->
        <script src="{{asset('public/website/js/app.js')}}"></script>
    </body>
</html>