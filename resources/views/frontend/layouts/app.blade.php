<!DOCTYPE html>
<html lang="en">
    @include('frontend.includes.head')

    <body>

        <!--Navbar Start-->
        @include('frontend.includes.navbar')
        <!-- Navbar End -->

        @yield('content')

        <!-- footer start -->
        @include('frontend.includes.footer')
        <!-- footer end -->

    </body>

</html>
