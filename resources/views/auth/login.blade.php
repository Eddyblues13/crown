<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="3w5AVl4D6j0qwvQbEgRWQxreNZZiGCgF2CFyzuZH">
    <title>locke stocks | User Login</title>


    <link rel="icon" href="account/storage/app/public/photos/uPYDzhfavicon.png1677339254" type="image/png" />

    <link href="account/temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="account/temp/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="account/temp/css/line.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Main Css -->
    <link href="account/temp/css/style.css" rel="stylesheet" type="text/css" />
    <link href="account/temp/css/colors/default.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body class="h-100 bg-soft-primary">
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "c0e51a93-afe6-4887-b6f7-a7cbeff14c63";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
    <section class="y auth" style="background-color:black">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <div class="text-center">
                        <a href="/"><img src="{{ asset('logo.png') }}" alt="" class="mb-3 img-fluid auth__logo"
                                style="width:180px"></a>
                    </div>




                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">User Login</h4>
                            <form method="POST" action="{{ route('login') }}" class="mt-4 login-form">
                                @csrf
                                <div class="row">
                                    <!-- Email or Username -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="login">Email or Username <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="email" name="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter Email or Username" required>
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password">Password <span class="text-danger">*</span></label>
                                            <input type="password" id="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Enter Password" required>
                                            @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" id="remember" name="remember"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="remember">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->




    <script src="account/temp/js/jquery-3.5.1.min.js"></script>
    <script src="account/temp/js/bootstrap.bundle.min.js"></script>

    <!-- SLIDER -->
    <script src="account/temp/js/owl.carousel.min.js"></script>
    <script src="account/temp/js/owl.init.js"></script>
    <!-- Icons -->
    <script src="account/temp/js/feather.min.js"></script>
    <script src="account/temp/js/bundle.js"></script>

    <script src="account/temp/js/app.js"></script>
    <script src="account/temp/js/widget.js"></script>

    <script>
        $('#input1').on('keypress', function(e) {
            return e.which !== 32;
        });
    </script>
</body>

</html>