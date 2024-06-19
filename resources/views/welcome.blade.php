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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Smooth scroll to anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <!-- Header -->
        <header class="w-full bg-white dark:bg-gray-800 shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="javascript:location.reload(true);">
                        <img src="{{ asset('images/zion_home.ico') }}" alt="Logo" class="block h-20 w-auto">
                    </a>
                </div>
                <!-- Login Button -->
                <nav class="hidden space-x-8 sm:flex">
                    <a href="{{ route('login') }}"
                        class="text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400">Login</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400">Registre-se</a>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="w-full flex-1">
            <!-- Banner -->
            <div class="relative bg-white dark:bg-gray-800 overflow-hidden">
                <div class="max-w-7xl mx-auto">
                    <div
                        class="relative z-10 pb-8 bg-white dark:bg-gray-800 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                            <div class="sm:text-center lg:text-left">
                                <h1
                                    class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                                    <span class="block xl:inline">Bem-vindo ao</span>
                                    <span class="block text-indigo-600 xl:inline">Nosso E-Commerce</span>
                                </h1>
                                <p
                                    class="mt-3 text-base text-gray-500 dark:text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Explore nossa coleção de produtos incríveis e encontre ofertas exclusivas!
                                </p>
                                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                    <div class="rounded-md shadow">
                                        <a href="#products"
                                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                            Produtos em destaque
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>

            <!-- Featured Products Section -->
            <section id="products" class="mt-12 bg-gray-100 dark:bg-gray-900">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Produtos em Destaque</h2>
                        <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">Confira alguns dos nossos produtos mais
                            populares</p>
                    </div>
                    <div
                        class="mt-10 grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                        @foreach ($products as $product)
                            <!-- Example Product -->
                            <div class="group relative">
                                <div
                                    class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                    <img src="{{ asset('images/produto.png') }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700 dark:text-gray-200">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ $product->description }}
                                        </p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">
                                        ${{ number_format($product->price, 2) }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>