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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Make the video cover the background */
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Send the video to the background */
        }

        .overlay-content {
            position: relative;
            z-index: 1; /* Ensure the content is above the video */
        }

        .footer {
            text-align: center; /* Center text horizontally */
            padding: 1rem 0; /* Add some padding */
            position: absolute; /* Change to relative for normal flow */
            bottom: 0;
            width: 100%; /* Full width */
            z-index: 2; /* Bring the footer above other content */
        }

        .logo-image {
            position: absolute; /* Absolute positioning to move it freely */
            top: -60px; /* Move it up outside of the parent div */
            left: 50%; /* Center it horizontally */
            transform: translateX(-50%); /* Align the center of the image with the center of the parent */
        }

        .bg-body {
            background: rgba(2, 0, 36, 0.3);
            background: linear-gradient(180deg, rgba(41, 41, 211, 0.1) 20%, rgb(14, 14, 161, 0.5) 80%, rgb(27, 27, 195, 0.8) 100%);
        }

        /* Ensure the parent container doesn't hide the image */
        .parent-container {
            position: relative;
            overflow: visible; /* Make sure the overflow is visible */
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">

    <!-- Background Image -->
    <img src="{{ asset('assets/bgg.jpg') }}" class="background-image" alt="Bg Logo">

    <!-- Content -->
    <div class="overlay-content min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-body">
        <div class="w-full sm:max-w-lg mt-6 bg-white shadow-md overflow-visible sm:rounded-lg parent-container bg-opacity-90">
            <img src="{{ asset('assets/psu.png') }}" class="logo-image w-32" alt="Logo">

            <div class="flex items-center justify-center flex-col mt-20">
                <p class="font-black text-2xl">Pangasinan State University</p>
                <p class="font-medium">Asingan Campus</p>
            </div>
            {{ $slot }}
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p class="text-white font-black">Copyright &copy; {{ date('Y') }} Pangasinan State University</p>
    </div>

</body>
</html>
