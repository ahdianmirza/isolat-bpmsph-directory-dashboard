<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Isolat Bank | {{ $title }}</title>
</head>

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <div class="logo d-flex align-items-center w-auto text-decoration-none">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block fs-3">NiceAdmin</span>
                                </div>
                            </div><!-- End Logo -->

                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session()->has('loginError'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('loginError') }}
                                </div>
                            @endif

                            <div class="card border border-0 bg-white mb-3">
                                <div class="card-body">
                                    <div class="pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account
                                        </h5>
                                        <p class="text-center">Enter your username & password to login</p>
                                    </div>

                                    <form action="/login" method="post" class="row g-3">
                                        @csrf
                                        <div class="col-12">
                                            <label for="username" class="form-label fw-semibold">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text bg-white" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username"
                                                    class="form-control @error('username') is-invalid @enderror bg-white"
                                                    id="username" value="{{ old('username') }}"
                                                    placeholder="Enter your username" autofocus autocomplete="off"
                                                    required>
                                                @error('username')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label fw-semibold">Password</label>
                                            <input type="password" name="password"
                                                class="form-control  @error('password') is-invalid @enderror bg-white"
                                                id="password" placeholder="Enter your password" required>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0 fw-semibold">Don't have account? <a href="/register"
                                                    class="text-decoration-none fw-bolder">Create
                                                    an account</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src=" {{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src=" {{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src=" {{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
