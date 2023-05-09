<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    //Son los atributos que se acepta que llegen a la BD, para proteger de inyección
    protected $fillable = [
        'tipo_persona_id',
        'razon_social',
        'persona',
        'rfc',
        'domicilio',
        'email',
        'telefono'
    ];

    public function tipo_persona()
    {
        return $this->belongsTo(Tipo_persona::class, 'tipo_persona_id', 'id');
    }
}
