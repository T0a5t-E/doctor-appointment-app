<x-admin-layout :breadcrumb="[
    ['name' => 'Usuarios', 'href' => route('admin.users.index')],
    ['name' => 'Editar']
]">

    <h2 class="text-xl font-semibold mb-4">Editar Usuario</h2>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
            <ul class="list-disc ps-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-3">
            <label class="block">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-3">
            <label class="block">Contraseña (dejar en blanco para no cambiar)</label>
            <input type="password" name="password" class="w-full border p-2 rounded">
        </div>

        <div class="mb-3">
            <label class="block">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="w-full border p-2 rounded">
        </div>

        <div class="mb-3">
            <label class="block mb-2">Roles</label>
            @foreach ($roles as $role)
                <label class="inline-flex items-center me-4">
                    <input type="checkbox" name="roles[]" value="{{ $role->name }}" class="me-2"
                        {{ in_array($role->name, $user->roles->pluck('name')->toArray()) ? 'checked' : '' }}>
                    {{ $role->name }}
                </label>
            @endforeach
        </div>

        <div>
            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary ms-2">Volver</a>
        </div>
    </form>

</x-admin-layout>
