<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('css/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('css/summernote-bs4.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    </head>
    <body class="font-sans antialiased hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @inertia
        </div>
                <!-- Scripts -->
                @routes
                <script src="{{ asset('js/app.js') }}" defer></script>
                <!-- jQuery -->
                <script src="{{ asset('js/jquery.min.js') }}"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                <script>
                $.widget.bridge('uibutton', $.ui.button)
                </script>
                <!-- Bootstrap 4 -->
                <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
                <!-- ChartJS -->
                <script src="{{ asset('js/Chart.min.js') }}"></script>
                <!-- Sparkline -->
                <script src="{{ asset('js/sparkline.js') }}"></script>
                <!-- JQVMap -->
                <script src="{{ asset('js/jquery.vmap.min.js') }}"></script>
                <script src="{{ asset('js/jquery.vmap.usa.js') }}"></script>
                <!-- jQuery Knob Chart -->
                <script src="{{ asset('js/jquery.knob.min.js') }}"></script>
                <!-- daterangepicker -->
                <script src="{{ asset('js/moment.min.js') }}"></script>
                <script src="{{ asset('js/daterangepicker.js') }}"></script>
                <!-- Tempusdominus Bootstrap 4 -->
                <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
                <!-- Summernote -->
                <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
                <!-- overlayScrollbars -->
                <script src="{{ asset('js/jquery.overlayScrollbars.min.js') }}"></script>
                <!-- AdminLTE App -->
                <script src="{{ asset('js/adminlte.js') }}"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="{{ asset('js/dashboard.js') }}"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="{{ asset ('js/demo.js') }}"></script>
    </body>



</html>
