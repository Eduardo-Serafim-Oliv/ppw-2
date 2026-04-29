<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    protected $fillable = [

        'person_id'
    ];

    // O ator pertence a uma pessoa
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    // Ator aparece em muitos filmes
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class)
            ->withPivot('papel')
            ->withTimestamps();
    }
}
