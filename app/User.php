<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description' ,'username', 'email', 'password', 'img_path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function entertainments(){
        return $this->hasMany(Entertainment::class);
    }

    public function catalog(){
        return $this->hasMany(Catalog::class);
    }

    public function carousel(){
        return $this->hasMany(Carousel::class);
    }

    public function entertainment_messages(){
        return $this->belongsToMany(Entertainment::class, 'entertainment_messages')->withTimestamps()->withPivot('message');
    }

    public function catalog_messages(){
        return $this->belongsToMany(Catalog::class, 'catalog_messages')->withTimestamps()->withPivot('message');
    }

    public function ratings(){
        return $this->belongsToMany(Entertainment::class, 'ratings')->withPivot('id','rating')->withTimestamps();
    }
}
