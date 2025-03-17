<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nombre', 'email', 'password', 'rol', 'foto_perfil',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}