<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Docente Admin',
            'email' => 'admin@utn.com',
            'password' => Hash::make('password'), // ¡Recuerda cambiar 'password' por una contraseña segura!
            'is_admin' => true,
            'photo_path' => 'profile-photos/default-avatar.png', // Una foto por defecto
        ]);
    }
}