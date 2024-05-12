<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2023 21:38:56 GMT -->

<head>

    @include('system.layouts.meta')
    @include('system.layouts.styles')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('system.layouts.header')

        <!-- removeNotificationModal -->
        @include('system.layouts.partials.removeNotificationModal')
        <!-- /.modal -->

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            @include('system.layouts.menu')

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            {{-- footer  --}}
            @include('system.layouts.footer')

        </div><!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    @include('system.layouts.partials.backToTop')
    <!--end back-to-top-->

    <!--preloader-->
    {{-- @include('system.layouts.partials.preloader') --}}

    <!-- Theme Settings -->
    {{-- @include('system.layouts.partials.themeSettings') --}}

    <!-- JAVASCRIPT -->
    @include('system.layouts.scripts')

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2023 21:38:57 GMT -->

</html>
