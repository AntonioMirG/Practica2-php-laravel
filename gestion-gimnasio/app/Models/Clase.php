<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clase extends Model
{
    use HasFactory;

    protected $table = 'clases';

    protected $fillable = [
        'nombre',
        'descripcion',
        'profesor_id',
    ];

    public function profesor(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'profesor_id');
    }

    public function reservas(): HasMany
    {
        return $this->hasMany(Reserva::class, 'clase_id');
    }
}
