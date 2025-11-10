<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pemetaan Beban Kerja BNNK Cilacap') }}</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bnn-blue': '#1e40af',
                        'bnn-dark-blue': '#172554',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>

    <!-- Livewire Styles -->
    @livewireStyles
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        [x-cloak] { display: none !important; }
        /* Additional styles for better UI */
        .form-input {
            border-radius: 0.375rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            border: 1px solid #d1d5db;
        }
        .form-input:focus {
            border-color: #93c5fd;
            outline: none;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }
        .btn-primary {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background-color: #2563eb;
            border: 1px solid transparent;
            border-radius: 0.375rem;
            font-weight: 600;
            font-size: 0.75rem;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 150ms ease-in-out;
        }
        .btn-primary:hover {
            background-color: #1d4ed8;
        }
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background-color: #e5e7eb;
            border: 1px solid transparent;
            border-radius: 0.375rem;
            font-weight: 600;
            font-size: 0.75rem;
            color: #1f2937;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 150ms ease-in-out;
        }
        .btn-secondary:hover {
            background-color: #d1d5db;
        }
    </style>
</head>
<body class="font-sans antialiased min-h-screen flex flex-col">
    <div class="flex flex-col flex-grow">
        @livewire('partials.header')

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @livewire('partials.footer')
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Custom Script to Disable Livewire Loading Screen -->
    <script>
        document.addEventListener('livewire:load', function () {
            // Disable Livewire's loading overlay
            Livewire.hook('message.sent', () => {
                // Remove any loading elements that might appear
                const loadingElements = document.querySelectorAll('.wire-loading, .wire-loading-mask');
                loadingElements.forEach(el => el.remove());
            });
            
            // Disable default loading behavior
            window.addEventListener('beforeunload', () => {
                // Remove any loading elements before page navigation
                const loadingElements = document.querySelectorAll('.wire-loading, .wire-loading-mask');
                loadingElements.forEach(el => el.remove());
            });
        });
    </script>
</body>
</html>
