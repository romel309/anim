<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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

    public function entertainment_messages(){
        return $this->belongsToMany(User::class, 'entertainment_messages')->withTimestamps()->withPivot('message');
    }

    public function ratings(){
        return $this->belongsToMany(User::class, 'ratings')->withTimestamps();
    }

    public function total_ratings(Entertainment $entertainment){
      return $entertainment->ratings()->wherePivot('entertainment_id', $entertainment->id)->pluck('rating')->count();
    }

    public function avg_ratings(Entertainment $entertainment){
      return $entertainment->ratings()->wherePivot('entertainment_id', $entertainment->id)->pluck('rating')->avg();
    }

}
