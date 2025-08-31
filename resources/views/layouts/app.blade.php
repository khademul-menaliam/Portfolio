<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'My Portfolio') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">

        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    {{-- or if .ico --}}
    {{-- <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"> --}}

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#3b82f6',
                            dark: '#2563eb'
                        },
                        secondary: {
                            light: '#10b981',
                            dark: '#059669'
                        }
                    },
                    animation: {
                        'spin-slow': 'spin 8s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <!-- asset() generates the full URL for the file in the public directory -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="min-h-screen flex flex-col">

    <!-- Include header layout -->
    @include('layouts.header')

    <!-- Main content section -->
    <main class="flex-grow pt-24">
        @yield('content')
    </main>

    <!-- Include footer layout -->
    @include('layouts.footer')
</body>
</html>
