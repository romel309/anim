<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name', 'description'];

    public function entertainments(){
      return $this->belongsToMany(Entertainment::class);
    }
}
