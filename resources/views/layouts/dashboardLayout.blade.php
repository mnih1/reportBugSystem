<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

        @yield('head')

        <title>Report Bug System</title>
    </head>
    <body>
        <div class="container">
                @yield('nav')
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
