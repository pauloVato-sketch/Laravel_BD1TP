<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends DefaultModel
{
    use HasFactory;
    protected $table = 'Atores';

    public function filmes()
    {
        //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. authors em pivot', 'key ref. books em pivot')
        return $this->belongsToMany(Filme::class,'Elencos', 'Ator_ID', 'Filme_ID')->withPivot(['Papel', 'Personagem']);
    }
}
