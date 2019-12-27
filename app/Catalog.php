<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
  protected $fillable = ['name', 'user_id', 'description', 'youtube_link', 'thumbnail'];
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function entertainments(){
    return $this->belongsToMany(Entertainment::class)->withPivot('id','rank')->orderBy('rank', 'asc');
  }

  public function visitor_entertainments(){
    return $this->belongsToMany(Entertainment::class)->orderBy('rank', 'asc');
  }
}
