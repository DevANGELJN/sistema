<!doctype html>
<html lang="es">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">
    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="main-inicio">
    {{-- Componente navbar   --}}
    <x-navbar>
    </x-navbar>
    {{-- Fin de componente navbar   --}}
    <div class="container-main">
        <div class="content-container-main">
            {{-- login --}}
            <x-login>
            </x-login>
            {{-- fin login --}}
            <div class="container-animation">
                <div class="hero-section">
                    <div class="container d-flex align-items-center justify-content-center fs-1 text-white">
                        <div class="animation-logo">
                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                            <dotlottie-player
                                src="https://lottie.host/18318550-e195-4e82-b4de-807cb4078974/JcJIdGiTVv.json"
                                background="transparent" speed="1" style="width: 600px; height: 600px;" loop
                                autoplay></dotlottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="py-14" id="contacto">
        <div class="max-w-screen-xl mx-auto md:px-8">
            <div class="items-center gap-x-12 sm:px-4 md:px-0 lg:flex">
                <div class="flex-1 sm:hidden lg:block">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        class="md:max-w-lg sm:rounded-lg" alt="">
                </div>
                <div class="max-w-xl px-4 space-y-3 mt-6 sm:px-0 md:mt-0 lg:max-w-2xl">
                    <h3 class="text-indigo-600 font-semibold">
                        Professional services
                    </h3>
                    <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                        Build your SaaS solution with help from our experts
                    </p>
                    <p class="mt-3 text-gray-600">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum, sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium
                    </p>
                    <a href="javascript:void(0)"
                        class="inline-flex gap-x-1 items-center text-indigo-600 hover:text-indigo-500 duration-150 font-medium">
                        Learn more
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
