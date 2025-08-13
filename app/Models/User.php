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
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name', // Nome do usuário
        'email', // E-mail do usuário
        'password', // Senha do usuário
    ];

    /**
     * Os atributos que devem ser ocultados na serialização.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password', // Oculta a senha
        'remember_token', // Oculta o token de "lembrar-me"
    ];

    /**
     * Obtém os atributos que devem ser convertidos/cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime', // Converte o campo para data/hora
            'password' => 'hashed', // Converte a senha para hash
        ];
    }
}
