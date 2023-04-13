<div>
    <div class="delete w-full h-full top-0 z-40 m-auto absolute">
        <div class="w-4/5 min-h-0 p-3 m-auto mt-5 bg-white rounded-md">
            <button class="fas fa-times absolute top-10 right-28 text-4xl close-delete"></button>
            @csrf
            <div class="p-4 flex">
                <h1 class="text-3xl m-auto">
                    Eliminar usuario
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

                <select name="username" wire:model="delete_user"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">--Usuario--</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->username }}">{{ $user->username }}</option>
                    @endforeach
                </select>
                <h2 class="hidden">{{ $delete_user }}</h2>
            </div>

           

            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center"
                wire:click="delete">Eliminar
                Usuario</button>
        </div>
    </div>
</div>
