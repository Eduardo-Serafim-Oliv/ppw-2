<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     protected $fillable = [

        'movie_id',
        'user_id',
        'nota',
        'descricao',
    ];

    public function user(){
         return $this->belongsTo(User::class);
    }
    // A avaliação também pertence a um filme
    public function movie() {
         return $this->belongsTo(Movie::class);
    }

}
