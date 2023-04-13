<div>
    <div class="create w-full min-h-0 pb-80 top-0 z-40 m-auto absolute">
        <div class="w-4/5 min-h-0 p-3 m-auto mt-5 bg-white rounded-md">
            <button class="fas fa-times absolute top-10 right-28 text-4xl close-create"></button>
            @csrf
            <div class="p-4 flex">
                <h1 class="text-3xl m-auto">
                    Crear nuevo usuario
                </h1>
            </div>

            @if (session()->has('message'))
                <div class="mb-3 inline-flex w-full items-center rounded-lg bg-green-300 px-6 py-5 text-base text-green-900"
                    role="alert">
                    <span class="mr-2">
                       <i class="fas fa-users"></i>
                    </span>
                    {{ session('message') }}
                </div>
            @endif

                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nombre" wire:model.defer="name" required autocomplete="off">
                    
                </div>

                <div class="mb-4">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Usuario</label>
                    <input type="text" id="username" name="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Usuario" wire:model.defer="username" required autocomplete="off">
                    
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Contraseña" wire:model.defer="password" required>
                    
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Confirmar
                        contraseña</label>
                    <input type="password" id="password" name="password_confirmation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Contraseña" wire:model.defer="confirm" required>
                    
                </div>

                <button
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center"
                    wire:click="save">Crear
                    Usuario</button>
        </div>
    </div>
</div>
