<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
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
