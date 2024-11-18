<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard</title>
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
    @include('admin.partials.navbar')

        <div class="container-fluid page-body-wrapper">
        @include('admin.partials.settings-panel')

        @include('admin.partials.sidebar')
            <div class="main-panel">
                @yield('content')
                @include('admin.partials.footer')
            </div>

        </div>
    </div>

    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('build/assets/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('build/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('build/assets/js/template.js') }}"></script>
    <script src="{{ asset('build/assets/js/settings.js') }}"></script>
    <script src="{{ asset('build/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('build/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('build/assets/js/Chart.roundedBarCharts.js') }}"></script>

</body>
</html>
