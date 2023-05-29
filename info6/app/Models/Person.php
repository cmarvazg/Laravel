<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    //Son los atributos que se acepta que llegen a la BD, para proteger de inyección
    protected $fillable = [
        'type_person_id',
        'proyect_id',
        'business_name',
        'person',
        'rfc',
        'home',
        'email',
        'phone',
        'debt'
    ];

    public function type_person()
    {
        return $this->belongsTo(TypePerson::class, 'type_person_id', 'id');
    }

    public function proyect()
    {
        return $this->belongsTo(Proyect::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'person_id');
    }
}
