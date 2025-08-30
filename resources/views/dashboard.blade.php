<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p class="font-bold">¡Bienvenido!</p>
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            @if ($user->is_admin)
                @include('dashboard-partials.admin-dashboard', ['user' => $user])
            @else
                @include('dashboard-partials.student-dashboard', ['user' => $user])
            @endif

        </div>
    </div>
</x-app-layout>