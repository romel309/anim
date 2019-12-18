<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function entertainments(){
      return $this->belongsToMany(Entertainment::class); 
    }
}
