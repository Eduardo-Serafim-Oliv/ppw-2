<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = [

        'nome',
        'duracao',
        'data_lancamento',
        'classificacao',
        'sinopse',
    ];

     public function avaliacoes(): HasMany{

      return $this->hasMany(Review::class);
    // Eloquent infere: avaliacoes.user_id
    }


            
    // public function atores()
    //         return $this->belongstoMany(return(Actor::class, ''));
    // public function atores()
    //         return $this->belongstoMany(return(Actor::class, ''));
    // public function atores()
    //         return $this->belongstoMany(return(Actor::class, ''));
    // public function atores()
    //         return $this->belongstoMany(return(Actor::class, ''));
    

}
