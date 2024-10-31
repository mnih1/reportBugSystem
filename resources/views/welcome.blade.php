<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RBS - Report Bug System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container mx-auto h-screen flex flex-col">
            <x-header/>
            <div class="w-full h-full flex items-center justify-around">
                <a href="{{ route('report') }}" class="w-56 h-16 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-light shadow-[0_0_25px] shadow-primary hover:scale-110 duration-300">
                    Report
                </a>
                <a href="{{ route('login') }}" class="w-56 h-16  rounded-full flex items-center justify-center text-white text-2xl font-light border border-primary shadow-[0_0_25px] shadow-primary hover:scale-110 duration-300">
                    Panel
                </a>
            </div>
        </div>
    </body>
</html>
