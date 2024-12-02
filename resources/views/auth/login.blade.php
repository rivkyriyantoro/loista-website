<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Login Administrator')</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{ asset('css/alert.css') }}" rel="stylesheet">
    @include('js.xhr')

    <style>
        body,
        html {
            height: 100%;
        }
    </style>

</head>

<body class="bg-admin">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin Loista</h1>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password"
                                            class="form-control form-control-user"placeholder="Password">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <button type="submit" value="Login"
                                        class="btn btn-primary btn-user btn-block rounded-5" onclick="login()"
                                        id="login_btn">
                                    <span id="login_text">Login</span>
                                    </button>

                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        function login() {
            const FD = new FormData();
            const email = $('#email').val().trim();
            const password = $('#password').val().trim();

            let hasError = false;

            // Validasi email
            if (email === '') {
                showError('email', 'Email tidak boleh kosong');
                hasError = true;
            } else {
                showError('email', '');
            }

            // Validasi password
            if (password === '') {
                showError('password', 'Password tidak boleh kosong');
                hasError = true;
            } else {
                showError('password', '');
            }

            // Jika ada error, hentikan proses login
            if (hasError) {
                return;
            }

            // Jika tidak ada error, lanjutkan ke proses pengiriman Ajax
            FD.append('email', email);
            FD.append('password', password);
            FD.append('_token', '{{ csrf_token() }}');

            sendAjaxRequest("{{ route('login.admin') }}", "POST", FD, function() {
                removeValidationClasses('form-group');
                window.location = "{{ route('dashboard') }}";
            });
        }
    </script>

</body>

</html>
