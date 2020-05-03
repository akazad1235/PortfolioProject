<!DOCTYPE html>
<html lang="en" class="fixed left-sidebar-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('title', 'admin')</title>
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('public/admin/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="{{asset('public/admin/vendor/pace/pace.min.js')}}"></script>
    <link href="{{asset('public/admin/vendor/pace/pace-theme-minimal.css')}}" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendor/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendor/animate.css/animate.css')}}">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="{{asset('public/admin/vendor/toastr/toastr.min.css')}}">

       <!--dataTable-->
       <link rel="stylesheet" href="{{('public/admin/vendor/data-table/media/css/dataTables.bootstrap.min.css')}}">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{asset('public/admin/vendor/magnific-popup/magnific-popup.css')}}">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('public/admin/stylesheets/css/style.css')}}">
    


</head>
<body>
	<div class="wrap">
		 <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="index.html" class="on-click">
                        <img alt="logo" src="{{asset('public/admin/images/header-logo.png')}}" />
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            @include('admin.components.topMenu')
         </div>
         <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
        	<div class="left-sidebar">
        		@include('admin.components.leftsideMenu')
        	</div>
        	<div class="content">
                 <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                 <div class="row animated fadeInUp">
                    @yield('content')
                </div>
                <!-- content HEADER -->
                
            </div>

            <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
	</div>	

	
	 <!--BASIC scripts-->
    <!-- ========================================================= -->
    <script src="{{asset('public/admin/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
    <script src="{{asset('public/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/vendor/nano-scroller/nano-scroller.js')}}"></script>
    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="{{asset('public/admin/javascripts/template-script.min.js')}}"></script>
    <script src="{{asset('public/admin/javascripts/template-init.min.js')}}"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <script src="{{asset('public/admin/vendor/toastr/toastr.min.js')}}"></script>
    <!--morris chart-->
    <script src="{{asset('public/admin/vendor/chart-js/chart.min.js')}}"></script>
    <!--Gallery with Magnific popup-->
    <script src="{{asset('public/admin/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!--Examples-->
    <!--dataTable-->
<script src="{{asset('public/admin/vendor/data-table/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/vendor/data-table/media/js/dataTables.bootstrap.min.js')}}"></script>
<!--Examples-->
<script src="{{asset('public/admin/javascripts/examples/tables/data-tables.js')}}"></script>
    <!-- Text Editor -->
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!--Examples-->
    <script src="{{asset('public/admin/javascripts/examples/dashboard.js')}}"></script>


<script>
        CKEDITOR.replace( 'service1' );
</script>
</body>
</html>