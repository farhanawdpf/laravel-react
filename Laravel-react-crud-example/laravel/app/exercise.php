<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exercise extends Model
{
    protected $fillable = ['username','description','duration','date'];


    public function username() {
        return $this->belongsTo(username::class);
    }

}
