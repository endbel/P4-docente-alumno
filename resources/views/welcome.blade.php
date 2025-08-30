<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Académico</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="bg-gray-100 text-black/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="relative w-full max-w-md bg-white shadow-xl rounded-lg p-8">
                
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Sistema de Gestión Académica</h1>
                    <p class="text-gray-500 mt-2">TUP - Programación IV</p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div>
                        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                        <input id="email" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <label for="password" class="block font-medium text-sm text-gray-700">Contraseña</label>
                        <input id="password" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-end mt-6">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Ingresar
                        </button>
                    </div>
                </form>

                <div class="text-center mt-6">
                    <a href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                        ¿No tienes una cuenta? Regístrate aquí
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>