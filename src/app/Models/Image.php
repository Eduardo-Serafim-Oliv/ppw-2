<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     protected $fillable = [

        'caminho',
        'nome',
    ];

     public function pessoas()
            return $this->belongstoMany(return(Person::class));

     public function filmes()
            return $this->belongstoMany(return(Movie::class));

     public function estudios()
            return $this->belongstoMany(return(Studio::class));


}
