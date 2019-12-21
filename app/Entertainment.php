<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    protected $fillable = ['name', 'user_id', 'description', 'youtube_link', 'img_path'];
    public function user(){
      return $this->belongsTo(User::class);
    }

    public function tag(){
      return $this->belongsToMany(Tag::class);
    }

    public function catalogs(){
      return $this->belongsToMany(Catalog::class);
    }
}
