<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Catalog;
use Faker\Generator as Faker;

$factory->define(Catalog::class, function (Faker $faker) {
    return [
      'user_id' => factory(\App\User::class),
      'name' =>$faker->sentence,
      'thumbnail' => 'visitor/images/basura/'.$faker->image('public/visitor/images/basura',640,480, null, false),
      'description'=>$faker->paragraph,
    ];
});
