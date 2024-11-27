<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../images/logo.svg" alt="logo">
                            </div>
                            <h4>Crear Cuenta?</h4>
                            <h6 class="font-weight-light">Registrarse es Sencillo</h6>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input id="name" class="form-control form-control-lg" type="text"
                                        name="name" value="{{ old('name') }}" required autofocus
                                        autocomplete="name" />
                                    @error('name')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" class="form-control form-control-lg" type="email"
                                        name="email" value="{{ old('email') }}" required autocomplete="username" />
                                    @error('email')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" class="form-control form-control-lg" type="password"
                                        name="password" required autocomplete="new-password" />
                                    @error('password')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input id="password_confirmation" class="form-control form-control-lg"
                                        type="password" name="password_confirmation" required
                                        autocomplete="new-password" />
                                    @error('password_confirmation')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn mt-4">
                                        Registrar
                                    </button>
                                    <div class="text-center mt-4 font-weight-light">
                                        Ya posee una cuenta? <a href="{{ route('login') }}" class="text-primary">Iniciar Sesión</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('build/assets/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('build/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('build/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('build/assets/js/template.js') }}"></script>
    <script src="{{ asset('build/assets/js/settings.js') }}"></script>
    <script src="{{ asset('build/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('build/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('build/assets/js/Chart.roundedBarCharts.js') }}"></script>
</body>

</html>
