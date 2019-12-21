<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carousel;
use Faker\Generator as Faker;

$factory->define(Carousel::class, function (Faker $faker) {
    return [
      'user_id' => factory(\App\User::class),
      'img_path' => 'visitor/images/basura/'.$faker->image('public/visitor/images/basura',640,480, null, false),
      'show' => '1',
    ];
});
