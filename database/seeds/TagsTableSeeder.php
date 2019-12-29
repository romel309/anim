<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
      $drama = Tag::create([
          'name' => 'Drama',
          'description' => 'Conflicto de la vida de los protagonistas por medio de eventos o acciones.',
      ]);

      //2
      $sci_fi = Tag::create([
          'name' => 'Sci-fi',
          'description' => 'Se presenta en un futuro lejano con tecnología no existente en la actualidad',
      ]);

      //3
      $dementia = Tag::create([
          'name' => 'Dementia',
          'description' => 'Algún personaje sufre de problemas psicológicos que afecta considerablemente la narrativa.',
      ]);

      //4
      $psicologic = Tag::create([
          'name' => 'Psicológico',
          'description' => 'Hay elementos psicológicos que afectan a los personajes.',
      ]);

      //5
      $perdida_miembros = Tag::create([
          'name' => 'Perdida de extremidades',
          'description' => 'Alguien dentro de la historia piere alguna extremidad.',
      ]);

      //6
      $mecha = Tag::create([
          'name' => 'Mecha',
          'description' => 'Hay robots en la narrativa y juegan un papel importante en la historia.',
      ]);

      //7
      $final_satisfactorio = Tag::create([
          'name' => 'Final satisfactorio',
          'description' => 'Hay un final satisfactorio.',
      ]);

      //8
      $final_depresivo = Tag::create([
          'name' => 'Final depresivo',
          'description' => 'El final te deja muy mal.',
      ]);

      //9
      $final_inesperado = Tag::create([
          'name' => 'Final inesperado',
          'description' => 'WTF',
      ]);

      //10
      $final_interpretativo = Tag::create([
          'name' => 'Final interpretativo',
          'description' => 'El final lo tienes que interpretar.',
      ]);

      //11
      $terminado = Tag::create([
          'name' => 'Terminado',
          'description' => 'Hay un final que concluye la historia.',
      ]);

      //12
      $plot_twist = Tag::create([
          'name' => 'Plot twist',
          'description' => 'Hay un plot twist que cambia completamente el tono de la historia.',
      ]);

      //13
      $pasotiempo = Tag::create([
          'name' => 'Gran paso de tiempo',
          'description' => 'Transcurre la historia en a lo largo de mucho tiempo.',
      ]);

      //14
      $f40and20 = Tag::create([
          'name' => '40y20',
          'description' => 'Hay una relación amorosa donde se presenta una gran diferencia de edad entre los involucrados.',
      ]);

      //15
      $magia = Tag::create([
          'name' => 'Magia',
          'description' => 'Se presenta la magia en la historia y juega un papel importante.',
      ]);

      //16
      $supernatural = Tag::create([
          'name' => 'Supernatural',
          'description' => 'Se presentan elementos supernaturales en la historia.',
      ]);

      //17
      $aventura = Tag::create([
          'name' => 'Aventura',
          'description' => 'Hay un objetico que siguen los personajes a lo largo de la historia.',
      ]);

      //18
      $fantasia = Tag::create([
          'name' => 'Fantasía',
          'description' => 'Se presentan elementos fantásticos dentro de la historia.',
      ]);

      //19
      $accion = Tag::create([
          'name' => 'Acción',
          'description' => 'Predomina la acción dentro de la historia.',
      ]);

      //20
      $peleas = Tag::create([
          'name' => 'Peleas',
          'description' => 'Los personajes resuelven sus problemas peleando para avanzar la historia.',
      ]);

      //21
      $comedia = Tag::create([
          'name' => 'Comedia',
          'description' => 'Hay una gran cantidad de comedia.',
      ]);

      //22
      $depresivo = Tag::create([
          'name' => 'Depresivo',
          'description' => 'La historia te deja deprimido a lo largo o al final de la historia.',
      ]);

      //23
      $escuela = Tag::create([
          'name' => 'Escuela',
          'description' => 'La historia se presenta en una escuela.',
      ]);

      //24
      $misterio = Tag::create([
          'name' => 'Misterio',
          'description' => 'En la historia hay un misterio que tratan de resolver los personajes.',
      ]);

      //25
      $horror = Tag::create([
          'name' => 'Horror',
          'description' => 'La historia contiene elementos de horror.',
      ]);

      //26
      $romance = Tag::create([
          'name' => 'Romance',
          'description' => 'La historia se centra en una relación amorosa.',
      ]);

      //27
      $superpoderes = Tag::create([
          'name' => 'Superpoderes',
          'description' => 'Los personajes de la historia presentan poderes que los humanos no poseen.',
      ]);

      //28
      $gore = Tag::create([
          'name' => 'Gore',
          'description' => 'Hay elementos de mutilación o cosas terríficas que nadie debería de ver.',
      ]);

      //29
      $viaje_por_el_tiempo = Tag::create([
          'name' => 'Viaje por el tiempo',
          'description' => 'Hay viajes en el tiempo al principio de la historia.',
      ]);

      //30
      $animacion_impresionante = Tag::create([
          'name' => 'Buena animación',
          'description' => 'Impresionante',
      ]);

      //Tags japan

      //31
      $shounen = Tag::create([
          'name' => 'Shounen',
          'description' => 'La historia está dirigido a un público masculino y joven.',
      ]);

      //32
      $isekai = Tag::create([
          'name' => 'Isekai',
          'description' => 'El personaje principal es transportado a otro mundo.',
      ]);

      //33
      $seinen = Tag::create([
          'name' => 'Seinen',
          'description' => 'La historia está dirigido a un público MADURO',
      ]);

      //34
      $harem = Tag::create([
          'name' => 'Harem',
          'description' => 'Los personajes están obsesionados de amor con el personaje principal.',
      ]);

      //35
      $anime = Tag::create([
          'name' => 'Anime',
          'description' => 'Medio de entretenmiento animado japones',
      ]);

    }
}
