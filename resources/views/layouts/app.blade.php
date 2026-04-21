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
    <body class="font-sans antialiased">
        {{--Navbar que se muestra en todas las vistas--}}
       <div class="header">
            <nav class="w-full sticky top-0 z-50 border-b border-default bg-neutral-primary h-16">
                <div class="max-w-screen-xl flex items-center justify-between mx-auto px-4 h-full">

                    <a href="/" class="flex items-center">
                        <img src="/img/logo.png" alt="EcoMove" class="h-14 w-auto">
                    </a>
                    {{--Menu burger para pantallas pequeñas--}}
                    <button
                        onclick="document.getElementById('navbar-default').classList.toggle('hidden')"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                        aria-controls="navbar-default"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                        </svg>
                    </button>
                    {{--Lista de enlaces--}}
                    <div class="hidden w-full md:block md:w-auto absolute md:relative left-0 md:left-auto right-0 top-16 md:top-auto z-40" id="navbar-default">
                        <ul class="font-medium flex flex-col p-4 mt-4 border border-default rounded-base bg-white md:bg-neutral-primary md:flex-row md:space-x-8 md:mt-0 md:border-0 md:p-0 md:items-center">                            
                            <li><a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Inicio</a></li>
                            <li class="relative group">
                                <button onclick="toggleMobileSubmenu(event)"
                                    class="flex items-center py-2 px-3 text-heading rounded hover:bg-neutral-tertiary 
                                        md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto w-full justify-between">
                                    Servicios
                                    <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-200" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>

                                <!-- Submenú para móvil -->
                                    <div class="submenu hidden pl-4 md:block md:absolute md:pl-0 md:left-0 md:top-full md:w-44 md:invisible md:opacity-0 md:group-hover:visible md:group-hover:opacity-100 md:transition-opacity md:duration-200">
                                        <ul class="font-normal bg-white md:rounded-lg md:shadow md:divide-y md:divide-gray-100 md:pt-2">
                                        <li><a href="#" class="block py-2 px-3 text-sm hover:bg-gray-100 md:px-4">Alquiler de vehículos</a></li>
                                        <li><a href="#" class="block py-2 px-3 text-sm hover:bg-gray-100 md:px-4">Venta de vehículos</a></li>
                                        <li><a href="#" class="block py-2 px-3 text-sm hover:bg-gray-100 md:px-4">Renting para empresas</a></li>
                                    </ul>
                                </div>
                            </li>

                            <script>
                            function toggleMobileSubmenu(event) {
                                const isMobile = window.innerWidth < 768;
                                if (!isMobile) return; // En desktop lo maneja el CSS hover
                                
                                const button = event.currentTarget;
                                const submenu = button.nextElementSibling;
                                submenu.classList.toggle('hidden');
                                const arrow = button.querySelector('svg');
                                arrow.style.transform = submenu.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                            }
                            </script>
                            <li><a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Catálogo</a></li>
                            <li><a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Reservas</a></li>
                            <li><a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Sobre nosotros</a></li>
                            <li><a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Blog</a></li>
                            <li><a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Contacto</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
        <main>
            @yield('content')
        </main>
    </body>
</html>
