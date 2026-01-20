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
        <div class="min-h-screen flex justify-center items-center p-4 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="w-full bg-white sm:max-w-md p-8 dark:bg-gray-800 shadow-2xl overflow-hidden sm:rounded-xl">
                <div class="text-center mb-8">
                        <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    
                    <!-- icon awal -->
                    {{-- <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a> --}}

                    <h2 class="text-2xl font-bold text-gray-800">Login Musyrif</h2>
                    <p class="text-gray-500 text-sm">Silakan masuk untuk mengakses raport</p>

                </div>
                
                
                
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
