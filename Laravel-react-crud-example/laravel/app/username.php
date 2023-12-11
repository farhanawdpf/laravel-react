<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class username extends Model
{
    protected $fillable = ['username'];

    public function exercise() {
        return $this->hasMany(exercise::class);
    }
}
