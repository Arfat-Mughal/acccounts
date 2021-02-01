<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $casts = [
        'id' => 'string'
    ];

    public function states()
    {
        return $this->hasMany(State::class,'country_id');
    }
}
