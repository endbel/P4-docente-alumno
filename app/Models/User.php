<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
    'name',
    'email',
    'password',
    'is_admin',
    'phone',
    'professional_url',
    'photo_path',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
    return [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
        ];
    }


    /**
     * whatsapp
     */
    public function getWhatsappUrlAttribute(): ?string
    {
    if (!$this->phone) {
        return null;
    }

    // limpiar cualquier caracter que no sea número
    $digits = preg_replace('/\D+/', '', $this->phone);

    $cc = config('app.whatsapp_cc', '54'); // prefijo desde .env (ej: WHATSAPP_CC=54)

    return $digits ? "https://wa.me/{$cc}{$digits}" : null;
    }

}
