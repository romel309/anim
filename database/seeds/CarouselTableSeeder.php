<?php

use Illuminate\Database\Seeder;
use App\Carousel;

class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $madoka = Carousel::create([
          'user_id' => '1',
          'img_path' => 'visitor/images/carousel/madoka.png',
          'show' => '1',
      ]);

      $gatsu = Carousel::create([
          'user_id' => '1',
          'img_path' => 'visitor/images/carousel/3gatsu.png',
          'show' => '1',
      ]);

      $eva = Carousel::create([
          'user_id' => '1',
          'img_path' => 'visitor/images/carousel/eva_third.jpg',
          'show' => '1',
      ]);
    }
}
