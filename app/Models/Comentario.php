<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['imovel_id', 'usuario_id', 'texto', 'nota', /* outros atributos */];

    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
