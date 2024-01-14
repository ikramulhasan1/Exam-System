<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('ui/frontend/assets') }}/img/favicon.png" type="image/png" />
    <title>{{ asset('ui/frontend/assets/img/favicon.png') }}virtualExam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets') }}/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets') }}/css/flaticon.css" />
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets') }}/css/themify-icons.css" />
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets') }}/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets') }}/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets') }}/css/style.css" />

    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    @include('frontend.layouts.partials.navbar')
    <!--================ End Header Menu Area =================-->

    @yield('content')
    <!--================ Start footer Area  =================-->
    @include('frontend.layouts.partials.footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('ui/frontend/assets') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/js/popper.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/js/owl-carousel-thumb.min.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('ui/frontend/assets') }}/js/gmaps.min.js"></script>
    <script src="{{ asset('ui/frontend/assets') }}/js/theme.js"></script>
</body>

</html>
