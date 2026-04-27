<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [

        'person_id'
    ];

    // O ator pertence a uma pessoa
    public function person(): BelongsTo{
        return $this->belongsTo(Person::class);
    }

        public function movies()
            return $this->belongstoMany(return(Movie::class));
}
