<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="Cars">
        <meta name="Description" content="Tasting the cars">
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/cssreset-min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
        @yield('css')

    </head>
    <body class="yui3-cssreset">
        <div id="navbar" class="navbar">
            <img id="logo" src="{{ asset('img/logo/tc-white-logo.svg')}}">

            <div>
                <a id="pined" href="{{ route('home') }}">VIEW ALL PINED ITEMS <img id="navarrow"src = "{{ asset('img/icon/arrowButton.png') }}"/> 
                </a>
            </div>
            <div class="navlinks">
                <a id="lastlink" href="{{ route('home') }}">ABOUT US</a>
                <a href="{{ route('home') }}">NEWS</a>
                <a href="{{ route('home') }}">PINED</a>
                <a href="{{ route('home') }}">SEARCH</a>
                <a href="{{ route('home') }}">HOME</a>
                
            </div>

        </div>
        
        <div>
            @yield('CONTENT')
        </div>

    </body>

    <!--javascript -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    @yield('js-scripts')
</html>