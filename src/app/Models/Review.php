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

    // A avaliação pertence a um usuário
    public function user(): BelongsTo {
         return $this->belongsTo(User::class);
    }
    // A avaliação também pertence a um filme
    public function movie(): BelongsTo{
         return $this->belongsTo(Movie::class);
    }

}
