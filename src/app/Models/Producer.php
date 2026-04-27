<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
     protected $fillable = [

        'person_id'
    ];

     public function person(): BelongsTo{
        return $this->belongsTo(Person::class);
    }

        public function movies()
            return $this->belongstoMany(return(Movies::class));
}
