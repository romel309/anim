<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function entertainments(){
    return $this->belongsToMany(Entertainment::class)->orderBy('rank', 'asc');
  }
}
