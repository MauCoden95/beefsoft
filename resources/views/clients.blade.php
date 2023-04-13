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

    @livewireStyles
</head>

<body class="transition-all">
    @include('display.top')
    @include('display.aside')

    <div class="relative w-3/4 h-full overflow-y-auto">
        <div class="w-11/12 h-32 mt-5 flex items.center justify-between m-auto">
            @livewire('count-clients')

            <button
                class="btn-create w-52 h-28 bg-blue-600 hover:bg-blue-800 rounded flex flex-col items-center justify-center">
                <h2 class="text-xl">Agregar cliente <i class="fas fa-plus-square"></i></h2>
            </button>

            <button
                class="btn-update w-52 h-28 bg-blue-600 hover:bg-blue-800 rounded flex flex-col items-center justify-center">
                <h2 class="text-xl">Actualizar Cliente <i class="fas fa-edit"></i></h2>
            </button>

            <button
                class="btn-delete w-52 h-28 bg-blue-600 hover:bg-blue-800 rounded flex flex-col items-center justify-center">
                <h2 class="text-xl">Eliminar Cliente <i class="fas fa-user-times"></i></h2>
            </button>
        </div>

        @livewire('show-clients')


        @livewire('create-client')

        @livewire('delete-client')


    </div>
    </div>

    </section>




    @livewireScripts
    <script src="{{ asset('js/Main.js') }}"></script>
</body>

</html>
