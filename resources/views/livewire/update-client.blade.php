<div>
    <div class="update w-full min-h-0 pb-80 top-0 z-40 m-auto absolute">
        <div class="w-4/5 min-h-0 p-3 m-auto mt-5 bg-white rounded-md">
            <button class="fas fa-times absolute top-10 right-28 text-4xl close-update"></button>
            @csrf
            <div class="p-4 flex">
                <h1 class="text-3xl m-auto">
                    Actualizar cliente
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

                <select name="name" wire:model.defer="update_client"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">--Usuario--</option>
                    @foreach ($clients as $clients)
                        <option value="{{ $clients->name }}">{{ $clients->name }}</option>
                    @endforeach
                </select>
                
            </div>

            <div class="mb-4">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Dirección</label>
                <input type="text" id="address" name="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Dirección" wire:model.defer="address" required>
                <h2 class="">{{ $address }}</h2>
            </div>

            <div class="mb-4">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                <input type="number" id="phone" name="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Teléfono" wire:model.defer="phone" required>
                <h2 class="">{{ $phone }}</h2>
            </div>

            <div class="mb-4">
                <label for="phone2" class="block mb-2 text-sm font-medium text-gray-900">Segundo Teléfono</label>
                <input type="number" id="phone2" name="phone2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Segundo Teléfono" wire:model.defer="phone2" required>
                <h2 class="">{{ $phone2 }}</h2>
            </div>

            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center"
                wire:click="update">Crear
                Usuario</button>
        </div>
    </div>
</div>
