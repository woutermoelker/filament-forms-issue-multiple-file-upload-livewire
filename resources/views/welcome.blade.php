<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'], 'build')

    {{-- Prevent mobile browsers from sniffing and replacing phonenumbers with tel:-links --}}
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    @livewireStyles


    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @filamentStyles()
</head>

<body class="lg:flex font-sans antialiased">
  
    @livewire('components.image-upload')

    

    @livewireScriptConfig
    @filamentScripts
</body>

</html>

