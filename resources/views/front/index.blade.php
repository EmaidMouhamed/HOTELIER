<!DOCTYPE html>
<html lang="en">

@include('front.pages.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        @include('front.pages.header')
        <!-- Header End -->

        @yield('content')        

        <!-- Footer Start -->
        @include('front.pages.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('front.pages.js')
</body>

</html>