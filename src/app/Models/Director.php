<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Director extends Model
{
    protected $fillable = [

        'person_id'
    ];

    // O diretor pertence a uma pessoa
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    // Diretor aparece em muitos filmes
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class)
            ->withTimestamps();
    }
}
