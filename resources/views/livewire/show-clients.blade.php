<div>
    <!-- component -->
    <div class="table-users w-11/12 text-gray-900 m-auto">
        <div class="p-4 flex">
            <h1 class="text-3xl m-auto">
                Todos los clientes
            </h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-center p-3 px-5">Nombre</th>
                        <th class="text-center p-3 px-5">Dni</th>
                        <th class="text-center p-3 px-5">Direccion</th>
                        <th class="text-center p-3 px-5">Teléfono</th>
                        <th class="text-center p-3 px-5">Segundo Teléfono</th>
                    </tr>
                    @foreach ($clients as $clients)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="w-1/4 py-3"><p class="text-center">{{ $clients->name }}</p></td>
                            <td class="w-1/4 py-3"><p class="text-center">{{ $clients->dni }}</p></td>
                            <td class="w-1/4 py-3"><p class="text-center timestands">{{ $clients->address }}</p></td>
                            <td class="w-1/4 py-3"><p class="text-center">{{ $clients->phone }}</p></td>
                            <td class="w-1/4 py-3"><p class="text-center timestands">{{ $clients->phone }}</p></td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
