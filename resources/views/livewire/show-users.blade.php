<div>
    <!-- component -->
    <div class="table-users w-11/12 text-gray-900 m-auto">
        <div class="p-4 flex">
            <h1 class="text-3xl m-auto">
                Todos los usuarios
            </h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-center p-3 px-5">Nombre</th>
                        <th class="text-center p-3 px-5">Usuario</th>
                        <th class="text-center p-3 px-5">Creado</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="w-1/4 py-3"><p class="text-center">{{ $user->name }}</p></td>
                            <td class="w-1/4 py-3"><p class="text-center">{{ $user->username }}</p></td>
                            <td class="w-1/4 py-3"><p class="text-center timestands">{{ $user->created_at }}</p></td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
