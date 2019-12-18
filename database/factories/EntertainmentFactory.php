<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entertainment;
use Faker\Generator as Faker;

$factory->define(Entertainment::class, function (Faker $faker) {
    return [
        //
        'user_id' => factory(\App\User::class),
        'name' =>$faker->sentence,
        'description'=>$faker->paragraph,
        'img_path' => 'visitor/images/basura/'.$faker->image('public/visitor/images/basura',640,480, null, false),
        'youtube_link' => 'https://www.youtube.com/watch?v=gGdGFtwCNBE',
    ];
});
