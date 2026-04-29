<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Studio extends Model
{
    protected $fillable = [

        'nome',
        'local',
    ];

    // Estúdio aparece em muitos filmes
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class)
            ->withTimestamps();
    }

    // Estúdio aparece em muitas imagens
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class)
            ->withTimestamps();
    }
}
