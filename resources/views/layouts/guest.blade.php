<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="{{ asset('css/stylesLogin.css') }}">

        <link rel="icon" type="image/x-icon" href="{{ asset('img/anteojos.ico') }}"> <!-- Favicon de la página -->

        <!-- Iconos de Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900"> -->
        <div class="login-container">
            <!-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> -->

            <div class="login-box">
                <h2 class="title-welcome">{{ __('Welcome') }}</h2>
                <form method="post" action="" class="guest-form">
                    <input type="hidden" name="access_type" value="guest"> <!-- Campo oculto para identificar el tipo de acceso -->
                    <button type="submit" class="guest-button">
                        <i class="fas fa-user"></i>            <!-- Icono de usuario -->
                        {{ __('Display Mode')}}
                    </button>
                </form>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
