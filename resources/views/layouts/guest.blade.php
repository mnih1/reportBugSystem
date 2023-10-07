<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

        <title>Report Bug System</title>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="container">
            @include('includes.nav')
            <div class="content">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
