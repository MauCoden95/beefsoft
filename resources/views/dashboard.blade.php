<!DOCTYPE html>
<html class="overflow-x-hidden scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/Styles.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body class="transition-all">
     <section class="w-screen h-screen bg-gray-100">
        <header class="w-full h-1/6 bg-red-500">
            <div class="w-11/12 h-full m-auto flex items-center justify-between">
                <h1 class="text-xl">BeefSoft - Panel Administrador</h1>
                <h2 class="text-3xl flex">
                    Bienvenido, {{ Auth::user()->username }}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a aria-current="page" href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                            class="text-xl text-white ml-5 border-2 border-black p-3 bg-red-800 hover:bg-red-700">Cerrar
                            sesión <i class="fas fa-sign-out-alt"></i></a>
                    </form>
                </h2>
            </div>
        </header>
        <div class="w-full h-5/6 flex">
    @include('display.aside')

    <div class="w-3/4 h-full">
        <div class="w-full h-3/4 mt-28 flex flex-col items-center justify-evenly">
            <div class="min-w-0 h-16 p-2 flex items-center justify-around md:justify-between">
                <h2 class="today text-black text-4xl mr-3"></h2>
                <span class="text-black text-4xl mr-3">|</span>
                <h2 class="hour text-black text-4xl"></h2>
            </div>
            <img src="{{ asset('img/Logo.png') }}" class="w-96">
        </div>
    </div>
    </div>

    </section>



    <script src="{{ asset('js/Main.js') }}"></script>
</body>

</html>
