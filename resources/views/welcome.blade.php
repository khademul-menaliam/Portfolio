<!DOCTYPE html>
<html lang="en" class="{{ session('theme', 'light') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'My Portfolio') }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        /* Dark mode */
        .dark {
            background-color: #1a202c;
            color: #e2e8f0;
        }

        /* Eye comfort mode */
        .eye-comfort {
            filter: brightness(0.8) contrast(0.9);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    @include('layouts.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
