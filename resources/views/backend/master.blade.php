<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.head')

</head>

<body>

    <!-- Main navbar -->
    @include('backend.layouts.navbar')
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('backend.layouts.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            @include('backend.layouts.pageHeader')
            <!-- /page header -->


            <!-- Content area -->
            @yield('content')
            <!-- /content area -->


            <!-- Footer -->
            @include('backend.layouts.footer')
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
