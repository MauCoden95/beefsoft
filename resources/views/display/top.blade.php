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