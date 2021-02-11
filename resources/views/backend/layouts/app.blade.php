<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard Soraya Web | Soraya Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/backend/assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="{{ url('/') }}/backend/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    @yield('css')
    <!-- App css -->
    <link href="{{ url('/') }}/backend/assets/css/bootstrap-material.min.css" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{ url('/') }}/backend/assets/css/app-material.min.css" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />
    <link href="{{ url('/') }}/backend/assets/css/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" disabled />
    <link href="{{ url('/') }}/backend/assets/css/app-material-dark.min.css" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="{{ url('/') }}/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    @livewireStyles
    @stack('css')
</head>

<body
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": false}'>

    <!-- Begin page -->
    <div id="wrapper">
        @include('sweetalert::alert')
        <!-- Topbar Start -->
        @include('backend.includes.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.includes.leftsidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">


                @yield('content')

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('backend.includes.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ url('/') }}/backend/assets/js/vendor.min.js"></script>

    <!-- Plugins js-->
    <script src="{{ url('/') }}/backend/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/apexcharts/apexcharts.min.js"></script>

    @yield('js')


    <!-- App js-->
    <script src="{{ url('/') }}/backend/assets/js/app.min.js"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <x-livewire-alert::scripts />
    @stack('js')

</body>

</html>
