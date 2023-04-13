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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <section id="login" class="bg-white">
        <div class="flex items-center justify-evenly px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="http://127.0.0.1:8000"
                class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-96 h-68 mr-2" src="{{ asset('img/Logo.png') }}" alt="logo">
            </a>
            <div class="w-2/5 rounded-lg bg-gray-400 bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-20 border border-gray-100">
                <div class="p-3 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-3xl text-center font-bold leading-tight tracking-tight md:text-3xl text-black">
                        Login
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-black">Usuario</label>
                            <input type="text" name="username" id="username"
                                class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white  dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Admin" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-black">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-xl px-5 py-2.5 text-center bg-red-700 hover:bg-red-600 hover:text-black">Ingresar <i class="fas fa-sign-in"></i></button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
