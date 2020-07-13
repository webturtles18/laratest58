<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:500|Roboto:400,700" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div id="app">
            <div class="flex-center position-ref full-height">
                @yield('content')
            </div>
        </div>
        <!-- Scripts -->
        <!--<script src="https://cdn.jsdelivr.net/npm/vue"></script>-->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
