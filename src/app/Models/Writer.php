<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
     protected $fillable = [

        'person_id'
    ];

    public function person(): BelongsTo{
        return $this->belongsTo(Person::class);
    }
}
