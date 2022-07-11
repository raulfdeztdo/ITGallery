<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }}">
    <link href="{{ URL::asset('css/bootstrap.min.css'); }}" rel="stylesheet" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js'); }}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/fontawesome.js'); }}" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidenav">
        <div class="logoTitle col d-flex align-items-center justify-content-center">
            <a href="/"><img src="{{ URL::asset('img/logo.png'); }}" alt="LogoITG" width="122px" height="32px"></a>
        </div>
        <ul style="list-style-type:none;">
            <li><a href="#">Home</a></li>
            <li><a href="#">Artists</a></li>
            <li><a class="active" href="/">Artworks</a></li>
            <li><a href="#">Movements</a></li>
            <li><a href="#">Exhibitions</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Emails</a></li>
            <li><a href="#">Mailing</a></li>
        </ul>
    </div>
    <div class="header">
        <h1>@yield('title-header')</h1>
        <h2>Artwork detail</h2>
        <h3>ARTWORKS / @yield('route-view')</h3>
    </div>
    <div class="row menuMain">
        @yield('menu-content')
    </div>
    <div class="container main">
        @yield('content')
    </div>
</body>
</html>