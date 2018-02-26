<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>

    <!-- Css -->
    <link href="{{ asset('static/home/css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('auth.login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('home.index') }}">Home</a>
            @else
                <a href="{{ route('home.index') }}">Home</a>
                <a href="{{ route('auth.login') }}">Login</a>
                <a href="{{ route('auth.register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <b>Sample</b>
        </div>

        <div class="links">
            <a href="https://laravel.com/docs"><b>Documentation</b></a>
            <a href="https://laracasts.com"><b>Laracasts</b></a>
            <a href="https://laravel-news.com"><b>News</b></a>
            <a href="https://forge.laravel.com"><b>Forge</b></a>
            <a href="https://github.com/laravel/laravel"><b>GitHub</b></a>
        </div>
    </div>
</div>
</body>
</html>