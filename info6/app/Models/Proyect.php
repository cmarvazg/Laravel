<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Person;

class Proyect extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    //Son los atributos que se acepta que llegen a la BD, para proteger de inyección
    protected $fillable = [
        'name',
        'date',
        'subtotal',
        'iva',
        'total',
        'concept',
        'comment'
    ];

    public function people()
    {
        return $this->hasMany(Person::class);
    }
}
