@extends('layouts.reglayout')

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
</head>

<body class="font-sans text-gray-900 antialiased">
    @section('content')
        <div style="background-image: url(assets/img/services-2.jpg); object-fit: cover; background-position: center center; background-size: contain; background-repeat: round;"
            class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="container-fluid position-relative d-flex p-0">
                <!-- Sign In Start -->
                <div class="container-fluid">
                    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                            <div class="rounded p-4 p-sm-5 my-4 mx-3" style="background-color: #0c193cb7;">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <a href="/">
                                        <h3 class="text-primary">
                                            <i class="fa fa-user-edit me-2"></i>LabSys
                                        </h3>
                                    </a>
                                    <h3>Login</h3>
                                </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    @endsection
</body>

</html>
