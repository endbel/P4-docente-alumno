<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determina si el usuario puede ver el listado de usuarios. (Solo Admin)
     */
    public function viewAny(User $user): bool
    {
        return $user->is_admin;
    }

    /**
     * Determina si el usuario puede ver un perfil. (Admin ve todos, alumno solo el suyo)
     */
    public function view(User $user, User $model): bool
    {
        return $user->is_admin || $user->id === $model->id;
    }

    /**
     * Determina si un usuario puede actualizar un perfil. (Solo el propio usuario)
     */
    public function update(User $user, User $model): bool
    {
        return $user->id === $model->id;
    }

    /**
     * Determina si un usuario puede eliminar una cuenta. (Solo el propio usuario)
     */
    public function delete(User $user, User $model): bool
    {
        return $user->id === $model->id;
    }

    // --- Los siguientes métodos no los usamos, los dejamos como están ---

    public function create(User $user): bool
    {
        return false; // Nadie puede crear usuarios desde un panel
    }

    public function restore(User $user, User $model): bool
    {
        return false;
    }

    public function forceDelete(User $user, User $model): bool
    {
        return false;
    }
}