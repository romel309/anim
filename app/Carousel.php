<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';
    protected $fillable = ['show'];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
