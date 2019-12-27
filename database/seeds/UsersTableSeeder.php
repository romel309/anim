<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $romel = User::create([
          'name' => 'Roms',
          'description' => 'Escuchando te boté',
          'img_path' => 'visitor/images/user/roms.jpg',
          'username' => 'roms',
          'email' => 'roms@hotmail.com',
          'password' => bcrypt('password'),
      ]);
      $juanpa = User::create([
          'name' => 'JuanPa',
          'description' => 'Hail Satan, welcome year zero',
          'img_path' => 'visitor/images/user/jp.jpg',
          'username' => 'jp',
          'email' => 'jp@hotmail.com',
          'password' => bcrypt('jp1'),
      ]);
      $omar = User::create([
          'name' => 'Omar',
          'description' => 'Mi bebida favorita es la coca',
          'img_path' => 'visitor/images/user/omar.jpg',
          'username' => 'menona',
          'email' => 'menona@hotmail.com',
          'password' => bcrypt('menona1'),
      ]);
      $david = User::create([
          'name' => 'David',
          'description' => 'Me gusta llegar a buenos acuerdos con la gente',
          'img_path' => 'visitor/images/user/david.jpg',
          'username' => 'frescura',
          'email' => 'david@hotmail.com',
          'password' => bcrypt('david1'),
      ]);
    }
}
