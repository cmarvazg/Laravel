<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaccion extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    //Son los atributos que se acepta que llegen a la BD, para proteger de inyección
    protected $fillable = [
        'tipo_transaccion_id',
        'persona_id',
        'monto',
        'fecha',
        'metodo',
        'referencia'
    ];

    public function tipo_transaccion()
    {
        return $this->belongsTo(Tipo_transaccion::class, 'tipo_transaccion_id', 'id');
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id', 'id');
    }
}
