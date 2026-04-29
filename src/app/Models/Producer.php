<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Producer extends Model
{
    protected $fillable = [

        'person_id'
    ];

    // O produtor pertence a uma pessoa
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    // Produtor aparece em muitos filmes
    public function movies(): BelongsToMany
    {
        return $this->belongstoMany(Movie::class);
    }
}
