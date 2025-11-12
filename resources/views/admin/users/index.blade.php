<x-admin-layout :breadcrumb="[
    ['name' => 'Usuarios', 'href' => route('admin.users.index')]
]">

    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-semibold">Usuarios</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear Usuario</a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="w-full text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2">#</th>
                    <th class="p-2">Nombre</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Roles</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-t">
                        <td class="p-2">{{ $user->id }}</td>
                        <td class="p-2">{{ $user->name }}</td>
                        <td class="p-2">{{ $user->email }}</td>
                        <td class="p-2">{{ $user->roles->pluck('name')->join(', ') }}</td>
                        <td class="p-2">
                            <a href="{{ route('admin.users.show', $user) }}" class="text-blue-600 me-2">Ver</a>
                            <a href="{{ route('admin.users.edit', $user) }}" class="text-yellow-600 me-2">Editar</a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline-block" onsubmit="return confirm('Eliminar usuario?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>

</x-admin-layout>
