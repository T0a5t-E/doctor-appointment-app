<x-admin-layout :breadcrumb="[
    ['name' => 'Usuarios', 'href' => route('admin.users.index')],
    ['name' => 'Ver']
]">

    <h2 class="text-xl font-semibold mb-4">Ver Usuario</h2>

    <div class="bg-white p-4 rounded shadow">
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Roles:</strong> {{ $user->roles->pluck('name')->join(', ') }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary ms-2">Volver</a>
    </div>

</x-admin-layout>
