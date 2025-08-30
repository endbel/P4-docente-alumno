<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 space-y-4">
        <div>
            <h3 class="text-xl font-semibold">Hola {{ $user->name }}</h3>
            <p class="text-gray-600">Este es tu panel de control académico.</p>
        </div>
        
        <div class="border-t border-gray-200 pt-4">
            <p class="text-sm text-gray-500">Tu número de legajo para trámites es:</p>
            <p class="text-2xl font-bold text-indigo-600">{{ $user->academic_id ?? 'olakase' }}</p>
        </div>
        
        <div class="border-t border-gray-200 pt-4">
            <p class="mb-2">Aquí tienes algunos accesos directos:</p>
            <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Editar mi Perfil
            </a>
        </div>
    </div>
</div>