<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Admin Dashboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

          <!-- Quill css -->
    <link href="{{ asset('backend/assets/vendor/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="{{ asset('backend/assets/js/config.js') }}"></script>

        <!-- Vendor css -->
        <link href="{{ asset('backend/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- Menu -->
            <!-- Sidenav Menu Start -->
    @include('admin.body.sidebar')       
            <!-- Sidenav Menu End -->

            
            <!-- Topbar Start -->
    @include('admin.body.header')      
            <!-- Topbar End -->

            <!-- Search Modal --> 
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="page-content">
                
            @yield('admin')
                <!-- container -->

                <!-- Footer Start -->
        @include('admin.body.footer')   
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

      <!-- Quill Editor js -->
    <script src="{{ asset('backend/assets/vendor/quill/quill.js') }}"></script>

        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

        <!-- Apex Chart js -->
        <script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Projects Analytics Dashboard App js -->
        <script src="{{ asset('backend/assets/js/pages/dashboard.js') }}"></script>

    </body>

</html>