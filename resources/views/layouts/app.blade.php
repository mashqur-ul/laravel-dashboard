<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset("assets/plugins/fontawesome-free/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/dist/css/adminlte.min.css") }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("assets/plugins/toastr/toastr.min.css") }}">
    @stack('include_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
<div class="wrapper">

    @include('layouts.nav_bar')

    @include('layouts.sidebar')

    <div class="content-wrapper">
        @include('layouts.bread_crumb')
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
    @include('layouts.footer')
</div>

<script src="{{ asset("assets/plugins/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
@stack('include_js')
<script src="{{ asset("assets/dist/js/adminlte.js") }}"></script>
</body>
</html>

