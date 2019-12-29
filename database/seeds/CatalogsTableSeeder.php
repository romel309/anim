<?php

use Illuminate\Database\Seeder;
use App\Catalog;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $topjp = Catalog::create([
          'user_id' => '2',
          'name' => 'Top 10 JP',
          'description' => 'Bueno aquí está mi top 10 de cantos demoniacos.',
          'thumbnail' => 'visitor/images/catalog/sao.jpg',
      ]);
      $topjp->entertainments()->sync([13 =>['rank' => 1],2=>['rank' => 2], 3=>['rank' => 3],4 =>['rank' => 4], 5=>['rank' => 5],
      6=>['rank' => 6],7=>['rank' => 7],8=>['rank' => 8],9=>['rank' => 9],10=>['rank' => 10],11=>['rank' => 10]]);

      $topomar = Catalog::create([
          'user_id' => '3',
          'name' => 'Top 10 Omar',
          'description' => 'Bueno aquí está mi top 10 de posiciones para dormir.',
          'thumbnail' => 'visitor/images/catalog/omar.gif',
      ]);
      $topomar->entertainments()->sync([10=>['rank' => 1],11=>['rank' => 1],2=>['rank' => 2],12=>['rank' => 3],3=>['rank' => 3],
      13=>['rank' => 4],9=>['rank' => 4],14=>['rank' => 5],4=>['rank' => 6],6=>['rank' => 7],15=>['rank' => 8],16=>['rank' => 9],17=>['rank' => 10]]);


      $topromel = Catalog::create([
          'user_id' => '1',
          'name' => 'Top 10 Romel',
          'description' => 'Como odió este template!!!!!!!!!!!!!!!!!!!!!!.',
          'thumbnail' => 'visitor/images/catalog/eva_series.jpg',
      ]);
      $topomar->entertainments()->sync([18=>['rank' => 1],19=>['rank' => 2],20=>['rank' => 3],21=>['rank' => 4],22=>['rank' => 5],7=>['rank' => 6],
      24=>['rank' => 7],25=>['rank' => 8],23=>['rank' => 9],26=>['rank' => 10]]);
    }
}
