<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dleohr.dreamstechnologies.com/template-1/dleohr-horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 15:11:42 GMT -->

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @include('layouts.nav')

</head>

<body>
    <!-- Inner wrapper -->
    <div class="inner-wrapper">
        
        <!-- Header -->
        @include('layouts.header')
        <!-- /Header -->

        <!-- Content -->
        @yield('content')
        <!--/Content-->
    </div>
    @include('layouts.footer')

</body>

<!-- Mirrored from dleohr.dreamstechnologies.com/template-1/dleohr-horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 15:11:55 GMT -->

</html>
