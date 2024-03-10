<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dleohr.dreamstechnologies.com/template-1/dleohr-horizontal/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 15:12:14 GMT -->

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register Page</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Linearicon Font -->
    <link rel="stylesheet" href="{{ asset('css/lnr-icon.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- HTML5 shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="{{ asset('js/html5shiv.min.js') }}"></script>
  <script src="{{ asset('js/respond.min.js') }}"></script>
  <![endif]-->

</head>

<body>

    <!-- Main Wrapper -->
    <div class="inner-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox shadow-sm">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            @include('Notifications._message_error')
                            @include('Notifications._message_success')
                            <!-- Form -->
                            <form action="{{ route('auth.register-post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" value="{{ old('name') }}" name="name" type="text"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" value="{{ old('email') }}" name="email" type="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" value="{{ old('password') }}" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control"value="{{ old('confirm_password') }}" name="confirm_password" type="password"
                                        placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-theme button-1 text-white ctm-border-radius btn-block"
                                        type="submit">Sign up
                                    </button>
                                </div>
                            </form>
                            <!-- /Form -->

                            <div class="text-center forgotpass"><a href="{{ route('auth.forgot-password') }}">Forgot
                                    Password?</a></div>
                            <div class="text-center forgotpass"><a href="{{ route('auth.login') }}">
                                    Sign in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <!-- Sticky sidebar JS -->
    <script src="{{ asset('plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

<!-- Mirrored from dleohr.dreamstechnologies.com/template-1/dleohr-horizontal/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 15:12:14 GMT -->

</html>
