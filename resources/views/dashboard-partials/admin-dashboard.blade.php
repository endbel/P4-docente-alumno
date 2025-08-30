<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <h3 class="text-xl font-semibold mb-4">Panel de Administrador</h3>
        <p class="mb-6">
            Hola {{ $user->name }}. Desde aquí puedes gestionar los usuarios de la plataforma.
        </p>
        <a href="{{ route('admin.users.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            Ver Listado de Usuarios
        </a>
    </div>
</div>