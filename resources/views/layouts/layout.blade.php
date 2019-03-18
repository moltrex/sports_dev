<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        @yield('style')

        <!-- Bootstrap -->
        <link href="assets/bootstrap-4.2.1-dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- nanoScrollerJS -->
        <link href="assets/nanoScrollerJS/nanoscroller.css" rel="stylesheet">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="assets/fontawesome-free-5.6.3-web/css/all.min.css">

        <!-- Site style -->
        <link rel="stylesheet" type="text/css" href="css/app.css">



        <script>
            window.Laravel = {!! json_encode([
                              'csrfToken' => csrf_token(),
                              ]) !!};
        </script>
    </head>
    <body>

        <header class="row mx-0 header">
            @include('layouts.header')
        </header>
        <div id="main" class="row mx-0 main">
            @yield('content')
        </div>
        <footer class="row mx-0 footer">
            @include('layouts.footer')
        </footer>

        @yield('scripts')

        <!-- Website-->
        <!--<script src="js/app.min.js"></script>-->
        <script src="assets/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/nanoScrollerJS/nanoscroller.min.js"></script>
        <script src="assets/fontawesome-free-5.6.3-web/js/fontawesome.min.js"></script>
        <script src="js/app.js"></script>


    </body>
</html>