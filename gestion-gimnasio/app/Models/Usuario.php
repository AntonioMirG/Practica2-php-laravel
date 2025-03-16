<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'password', 'rol', 'foto_perfil'];

    protected $hidden = ['password'];

    public function membresia()
    {
        return $this->hasOne(Membresia::class, 'usuario_id');
    }
    public function home()
{
    return view('home');
}

}

