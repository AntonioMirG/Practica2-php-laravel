<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'clase_id',
        'fecha_reserva',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function clase()
    {
        return $this->belongsTo(Clase::class);
    }
}