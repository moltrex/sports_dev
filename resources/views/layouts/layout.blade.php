
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
        
        <header class="header">
            @include('layouts.header')
        </header>
        
        <div id="main" class="main">
            @include('layouts.sidebar')
            @yield('content')
        </div>
        <footer class="footer">
            @include('layouts.footer')
        </footer>
       
        @yield('scripts')

        <!-- Website-->
        <script src="assets/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/nanoScrollerJS/nanoscroller.min.js"></script>
        <script src="assets/fontawesome-free-5.6.3-web/js/all.min.js"></script>
        <script src="js/app.js"></script>


    </body>
</html>
