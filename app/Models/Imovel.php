<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = ['titulo', 'descricao', 'valor_aluguel', /* outros atributos */];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
