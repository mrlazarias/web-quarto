<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome', 'email', 'foto', /* outros atributos */];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
