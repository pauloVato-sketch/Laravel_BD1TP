<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends DefaultModel
{
    use HasFactory;

    public function atores()
    {
        print_r("in atores");
        //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. books em pivot', 'key ref. author em pivot')
        return $this->belongsToMany(Ator::class, 'Elencos', 'Filme_ID', 'Ator_ID')->withPivot(['Papel', 'Personagem']);
    }
}
