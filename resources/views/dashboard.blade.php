<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">



<!-- Mirrored from themesbrand.com/steex/layouts/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 02:56:46 GMT -->
<head>

    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href=" {{ asset('steex/layouts/assets/images/favicon.ico')}}">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- jsvectormap css -->
    <link href="  {{ asset('steex/layouts/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src=" {{ asset('steex/layouts/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href=" {{ asset('steex/layouts/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href=" {{ asset('steex/layouts/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href=" {{ asset('steex/layouts/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href=" {{ asset('steex/layouts/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== App Menu ========== -->
@include('inc.sidebar')
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
      @include('inc.navbar')



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Welcome To E-library</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Library Management</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div><img src="image/photo.png" alt="" style="width:800px ; height: 600px;border-radius: 15px;"></div>
                     <div class="page">
                    <!-- end page title -->



            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Laravel Developer.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Favour Sunday
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    @include('inc.footer')

    <!-- JAVASCRIPT -->
    <script src=" {{ asset('steex/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src=" {{ asset('steex/layouts/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src=" {{ asset('steex/layouts/assets/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src=" {{ asset('steex/layouts/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Echarts -->
    <script src=" {{ asset('steex/layouts/assets/libs/echarts/echarts.min.js')}}"></script>

    <!-- Vector map-->
    <script src=" {{ asset('steex/layouts/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src=" {{ asset('steex/layouts/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <script src=" {{ asset('steex/layouts/assets/libs/list.js/list.min.js')}}"></script>

    <!-- dashboard-analytics init js -->
    <script src=" {{ asset('steex/layouts/assets/js/pages/dashboard-analytics.init.js')}}"></script>

    <!-- App js -->
    <script src=" {{ asset('steex/layouts/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/steex/layouts/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 02:56:51 GMT -->
</html>
