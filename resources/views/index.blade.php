<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="Cars">
        <meta name="Description" content="Tasting the cars">

        <!--Bootstrap-->
        <link rel="stylesheet" href="{{ asset('browser-component/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">      
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/cssreset-min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @yield('css')

 

    </head>
    <body class="yui3-cssreset">
        <!--javascript -->
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('browser-component/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
        @yield('js-scripts')

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
                <a style="padding-left:0;"href="{{ route('home') }}">HOME</a>
                
            </div>

        </div>
        
        <div>
            @yield('content')
        </div>

    </body>

</html>