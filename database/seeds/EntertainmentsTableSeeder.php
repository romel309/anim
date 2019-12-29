<?php

use Illuminate\Database\Seeder;
use App\Entertainment;
use App\Tag;

class EntertainmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
      $school_days = Entertainment::create([
          'user_id' => '1',
          'name' => 'School days',
          'description' => 'Makoto Itō viaja a la escuela en tren todos los días. Al comienzo de su segundo período, se enamora de una chica, llamada Kotonoha Katsura, quien asiste a la misma escuela y viaja en el mismo transporte, pero no están en la misma clase. Haciendo caso a una leyenda urbana le toma una fotografía con su teléfono móvil (si tienes la fotografía de la persona que te guste y nadie se da cuenta tu amor se hará realidad). Su compañera de mesa, Sekai Saionji, observa la foto durante una clase y se compromete a ayudarlo en concretar una relación amorosa con Kotonoha, a pesar del hecho de que, aunque Makoto no lo sabe, Sekai está enamorada de él. Así, los tres terminan vinculados en un triángulo amoroso, que le va a traer muchos problemas a Makoto y principalmente a Kotonoha.',
          'img_path' => 'visitor/images/entertainment/school_days.png',
          'youtube_link' => 'https://www.youtube.com/watch?v=8FXS6eWSvZ0',
      ]);
      $school_days->tag()->sync([1,5,9,11,23,26,34,35]); //dram,miembros,inesperado,trminado,escuela,romance,haerm

      //2
      $hunter_hunter = Entertainment::create([
          'user_id' => '2',
          'name' => 'Hunter x Hunter',
          'description' => 'Doce años antes del inicio de la historia, Ging Freecss abandonó a su hijo Gon en manos de su tía Mito en Isla Ballena. Gon, quien siempre creyó que sus padres habían muerto, descubre un día gracias al aprendiz de su padre, Kite, que este aún se encuentra con vida y se ha convertido en uno de los mejores cazadores,4​5​ individuos de élite y acreditados para el rastreo de tesoros secretos, bestias exóticas e, incluso, otros individuos.6​ Motivado por esta revelación, Gon decide dejar su hogar y presentarse al examen de cazador,7​ una serie de desafíos que buscan probar las habilidades, supervivencia y trabajo en equipo de sus participantes.4​Durante el examen, Gon conoce y se hace amigo de tres de los otros participantes: Kurapika, el último miembro del clan Kurta, que desea convertirse en cazador con el fin de vengar a su familia y recuperar los ojos escarlata que fueron robados de sus cuerpos por un grupo de mercenarios conocidos como Gen ei Ryodan; Leorio, que tan solo quiere ser cazador para poder pagar sus estudios de medicina; y Killua Zoldyck, un joven que abandonó su anterior vida como miembro de la más famosa familia de asesinos.8​',
          'img_path' => 'visitor/images/entertainment/hunter_hunter.png',
          'youtube_link' => 'https://www.youtube.com/watch?v=faqmNf_fZlE',
      ]);
      $hunter_hunter->tag()->sync([17,18,19,31,35]); //aventura,accion,fantasia,shounen

      //3
      $erased = Entertainment::create([
          'user_id' => '2',
          'name' => 'Erased',
          'description' => 'Año 2006. Satoru Fujinuma es un autor de manga frustrado que trabaja como repartidor de pizzas para llegar a final de mes. Lo que no sabe nadie es que posee un don excepcional: cada vez que tiene lugar alguna tragedia cerca de él es proyectado unos minutos hacia atrás en el tiempo para tratar de impedirla. Precisamente uno de estos episodios hace aflorar los recuerdos reprimidos de su infancia traumática, lo que acaba teniendo consecuencias demoledoras y trágicas en su presente. Una vez más, sufre una de sus Regresiones, solo que esta vez lo lleva hasta el año 1988, justo antes de que su compañera de clase Kayo Hinazuki se convirtiera en la primera víctima de un asesino en serie. ¿Será el Satoru de 10 años capaz de reparar el pasado para cambiar el presente?​',
          'img_path' => 'visitor/images/entertainment/erased.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=Y9G20wV0KHE',
      ]);
      $erased->tag()->sync([4,11,16,24,29,33,35]); //Misterio,terminado,viajepor,psicologico,suprnatural,seinen

      //4
      $re_zero = Entertainment::create([
          'user_id' => '2',
          'name' => 'Re:zero',
          'description' => 'Subaru Natsuki es un estudiante corriente de instituto que se pierde en un mundo alternativo, donde una preciosa chica de pelo plateado lo rescata. Para devolverle el favor decide quedarse con ella, pero el destino con el que carga la muchacha es mucho más pesado de lo que Subaru puede imaginar. Los enemigos atacan sin descanso, uno tras otro, hasta que finalmente mueren tanto él como la chica. Es entonces cuando Subaru descubre que tiene el poder de dar marcha atrás en el tiempo y volver al inicio de la historia, al punto en el que llegó al mundo desconocido. El problema es que él es el único que recuerda lo ocurrido.​',
          'img_path' => 'visitor/images/entertainment/rezero.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=9nMFDnmyCrE',
      ]);
      $re_zero->tag()->sync([1,4,5,15,18,29,32,33,35]); //drams,psicologico,perdida,magia,viajepor,psicologico,Isekai,seinen

      //5
      $shuumatsu = Entertainment::create([
          'user_id' => '2',
          'name' => 'Shuumatsu Nani Shitemasu ka? Isogashii Desu ka? Sukutte Moratte Ii Desu ka?',
          'description' => 'En un mundo donde los humanos han sido llevados a la extinción por las "Bestias", un joven llamado Willem despierta después de cientos de años. Él es el único humano que sigue con vida, y decide continuar su batalla con las bestias. La serie sigue la vida diaria de Willem liderando un grupo de hadas guerreras.​',
          'img_path' => 'visitor/images/entertainment/hadas.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=w3RfjaEv3Xw',
      ]);
      $shuumatsu->tag()->sync([5,8,15,18,20,26,35]); //perdida,fdepressivo,magia,peleas,viajepor,psicologico,seinen,romance

      //6
      $demon = Entertainment::create([
          'user_id' => '2',
          'name' => 'Kimetsu no Yaiba',
          'description' => 'Tanjirou Kamado es un chico inteligente y de buen corazón que vive con su familia y gana dinero vendiendo carbón. Todo cambia cuando su familia es atacada y asesinada por un demonio (oni). Tanjirou y su hermana Nezuko son los únicos sobrevivientes del incidente, aunque Nezuko fue convertida en demonio. Tanjirou se convierte en un asesino de demonios para ayudar a su hermana a volverse humana nuevamente y vengar la muerte de su familia.​',
          'img_path' => 'visitor/images/entertainment/yaiba.png',
          'youtube_link' => 'https://www.youtube.com/watch?v=-9rzNWRxCeA',
      ]);
      $demon->tag()->sync([17,15,20,30,33,35]); //supernatural,aventura,accion,peleas,perdida,animacion,seinen

      //7
      $sekai = Entertainment::create([
          'user_id' => '1',
          'name' => 'Shin Sekai Yori',
          'description' => 'La historia transcurre en Japón, unos mil años después de nuestra era. Seis niños (Saki, Shun, Satoru, Maria, Mamoru y Reiko) viven en una tranquila aldea, el 66º distrito de Kamisu, una aparente utopía rebosante de agua y tierras verdes, pero carente de cualquier tipo de tecnología avanzada. El mundo está ahora poblado por personas que poseen el "poder de los Dioses", la telekinesis o cantus (呪力 juryoku), una habilidad que se activa y es cultivada desde que los niños alcanzan la pubertad, y es virtualmente ilimitada. Después de ciertos incidentes en su centro educativo (donde Reiko y otro estudiante desaparecen misteriosamente) y en un viaje de campamento donde se topan con una inteligencia artificial y una tribu invasora de bakenezumi, Saki y los demás comienzan a entender la verdadera naturaleza de la sociedad en la que viven. Con el transcurso del tiempo, llegan a conocer la sangrienta historia que llevó a la humanidad a su actual estado, una verdad que era celosamente resguardada por aquellos quienes ahora gobernaban. Los jóvenes se lanzan a una peligrosa aventura por su supervivencia, luchando para proteger a sus amigos y a su mundo al borde del colapso.​',
          'img_path' => 'visitor/images/entertainment/shin_sekai.png',
          'youtube_link' => 'https://www.youtube.com/watch?v=Be0HqIhC48c',
      ]);
      $sekai->tag()->sync([1,7,11,13,16,24,27,33,35]); //drama,final_satisfactorio,terminado,paso_tiempo,supernatural,misterio,superpoderes,seinen

      //8
      $akame = Entertainment::create([
          'user_id' => '2',
          'name' => 'Akame ga Kill!',
          'description' => 'Tatsumi es un chico del campo que llega a la capital del Imperio para alistarse en el ejército con la intención de ascender rápidamente, ganar dinero y salvar a su pueblo del hambre debido a los grandes impuestos que tienen que pagar. Pero al llegar a la ciudad se da cuenta de que no todo es como él esperaba. Tras presenciar una horrible masacre llevada a cabo por los corruptos habitantes del imperio y la muerte de sus amigos, decide unirse a Night Raid, una división del Ejército Revolucionario que se opone al imperio, que se dedica al manejo de inteligencia en la capital y lleva a cabo asesinatos solicitados por la organización.​',
          'img_path' => 'visitor/images/entertainment/kill.png',
          'youtube_link' => 'https://www.youtube.com/watch?v=0nCGqC6sC1c',
      ]);
      $akame->tag()->sync([1,11,17,19,20,24,33,35]); //drama,terminado,aventura,accion,peleas,seinen

      //9
      $slime = Entertainment::create([
          'user_id' => '2',
          'name' => 'Tensei shitara Slime Datta Ken',
          'description' => 'Satoru Mikami es un hombre de 37 años que tiene un trabajo que no le gusta, sin salida y que no es feliz con la vida que lleva, pero cuando muere a manos de un ladrón y piensa que es su fin, se despierta descubriendo que se ha reencarnado en un mundo de magia y espada… ¡pero como un slime! Ahora tendrá que acostumbrarse a su nueva vida, aunque por suerte contará con dos habilidades únicas que le ayudarán a sobrevivir: una que le proporciona una gran comprensión de todo lo que le rodea, y otra que le permite copiar las habilidades de sus oponentes​',
          'img_path' => 'visitor/images/entertainment/slime.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=yQjsdbbJcuk',
      ]);
      $slime->tag()->sync([15,17,18,19,21,32,35]); //magia,aventura,fantasia,comedia,isekai

      //10
      $overlord = Entertainment::create([
          'user_id' => '2',
          'name' => 'Overlord',
          'description' => 'En el año 2126, se decide descontinuar el DMMORPG Yggdrasil, un juego que ha sido el más popular durante los últimos doce años, pero que ha caído en desuso con el tiempo. El día que debían cerrarse los servidores del juego, Momonga, líder del gremio Ainz Ooal Gown, una vez compuesto por 41 miembros y acreditado como uno de los gremios más fuertes del juego, decide permanecer en línea hasta que el juego sea cerrado a modo de despedida de ese lugar tan especial para él.

Tras la hora de cierre de los servidores, Momonga descubre que han sucedido cosas impresionantes y misteriosas. Aún está en la Gran Tumba de Nazarick, que es la base y hogar del gremio Ainz Ooal Gown, también se ha convertido realmente en su personaje con todos los poderes y habilidades que ello implica, los NPC que le sirven ahora son seres conscientes y la gran tumba ya no está en los pantanos de Yggdrasil, sino que ha sido enviada a un mundo de fantasía donde la magia y las criaturas místicas existen.

Momonga decide que si ha de existir en ese mundo aspirará a la grandeza y descubrirá si algún otro jugador fue arrastrado allí como él. Por ello, cambia su nombre a Ainz Ooal Gown y decide convertirse en alguien tan famoso y temido que sea conocido en todo ese mundo. Así, además de lograr la gloria, cualquier otro jugador extraviado sabrá que allí hay alguien de tan poderoso gremio.

Ahora, como Ainz Ooal Gown, el protagonista comienza a recorrer el mundo disfrazándose como aventurero, hechicero, mercenario, salvador o conquistador haciendo uso de la experiencia y habilidades que ha obtenido en el juego. Haciendo, de la Gran Tumba de Nazarick, un lugar en la historia de ese mundo.​',
          'img_path' => 'visitor/images/entertainment/overlord.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=KOWcj7XKnfQ',
      ]);
      $overlord->tag()->sync([15,17,18,19,21,32,35]); //magia,aventura,fantasia,comedia,isekai

      //11
      $log = Entertainment::create([
          'user_id' => '2',
          'name' => 'Log Horizon',
          'description' => 'Con 20 años de existencia y por su paquete de expansión undécimo, el juego de MMORPG Elder Tale (エルダー・テイル Erudā Teiru?) se ha convertido en un éxito mundial, con una base de usuarios de millones de jugadores. Sin embargo, durante el lanzamiento de la expansión duodécima llamada Novasphere Pioneers (ノウアスフィアの開墾 Nōasufia no Kaikon?, alt. Colonizando la noosfera), 30.000 jugadores japoneses que estaban iniciando sesión en el momento de la actualización, de repente se encuentran transportados en el mundo del juego virtual y luciendo sus avatares del juego.
En medio de ese evento, un jugador muy inteligente llamado Shiroe, junto con sus amigos, Naotsugu y Akatsuki, deciden formar un equipo para poder hacerle frente a los retos y obstáculos de este nuevo mundo, que desafortunadamente se ha convertido en su realidad.​',
          'img_path' => 'visitor/images/entertainment/log_horizon.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=CZ73Qv-RQNg',
      ]);
      $log->tag()->sync([15,17,18,19,21,32,35]); //magia,aventura,fantasia,comedia,isekai

      //12
      $angel = Entertainment::create([
          'user_id' => '3',
          'name' => 'Angel Beats',
          'description' => 'Angel Beats! toma lugar en una escuela secundaria que actúa como limbo para adolescentes que han muerto, pero cuando estaban vivos experimentaron sufrimiento o traumas los cuales deben arreglarse antes que les sea dada una segunda oportunidad en la vida. Estos en la escuela del más allá pueden sentir dolor al igual que lo hacían cuando estaban vivos, al igual que pueden morir otra vez, solamente para luego despertar sin lesiones. La historia sigue a Otonashi, un chico quien ha perdido su memoria al morir. Allí conoce a Yuri, una chica quien lo invita a unirse al SSS, siglas de Shinda Sekai Sensen (死んだ世界戦線 lit. Batallón del Mundo de los Muertos?), una organización que fundó y dirige la cual lucha contra Dios por las experiencias negativas a las cuales se enfrentaron los miembros del SSS cuando estaban vivos.​',
          'img_path' => 'visitor/images/entertainment/angel.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=fORH60LtOt4',
      ]);
      $angel->tag()->sync([1,8,11,22,23,35]); //drama, final depresivo, terminado, depresivo, escuela,

      //13
      $konosuba = Entertainment::create([
          'user_id' => '3',
          'name' => 'Kono Subarashii Sekai ni Shukufuku wo!',
          'description' => 'Kazuma Satō es un hikikomori que vive en un sector rural de Japón. Un día, decidido ir a comprar lo antes posible un videojuego, sale de casa y de regreso observa a una chica que sería atropellada por un camión y hace lo impensable para él, salvándola, y muriendo de forma heroica. O eso creía, puesto que realmente no fue atropellado y murió de un susto al pensar que lo había atropellado un camión, el cual ni siquiera era un camión y solo era un lento tractor que pasaba saludando a la joven que tampoco necesitaba ayuda, y solo la empujó violentamente. Su muerte fue tan patética que incluso los médicos que lo revisaron se burlaron de él, su familia también lo hizo, y todo en cuánto supo de su muerte se rió. Mágicamente, despierta en un salón increíble y desconocido, en el que encuentra a una hermosa diosa llamada Aqua, que le ofrece, luego de burlarse de su ridícula muerte, darle una nueva vida en un universo paralelo y de fantasía, en el que tendrá aventuras increíbles, enfrentará monstruos terribles, aprenderá poderosas magias, y deberá derrotar a un rey demonio que es el gobernante de ese mundo, alzándose como el héroe entre héroes, por lo cual le brindará un arma, habilidad u objeto (incluso ser) que lo ayude en su aventura.​',
          'img_path' => 'visitor/images/entertainment/konosuba.png',
          'youtube_link' => 'https://www.youtube.com/watch?v=83Ce1yWYOhc',
      ]);
      $konosuba->tag()->sync([15,18,21,32]); //magia,fantasia, comedia, iseakai

      //14
      $tate = Entertainment::create([
          'user_id' => '3',
          'name' => 'Tate no Yuusha no Nariagari',
          'description' => 'Iwatani Naofumi un joven universitario y otaku, se ve transportado repentinamente a un mundo desconocido después de leer un libro de fantasía que encontró por casualidad. Él, junto a otras tres personas, ha sido invocado como uno de los Héroes Legendarios que salvaran al mundo de las "Oleadas de la Calamidad". Desde ese momento, Naofumi, como el “Héroe del Escudo” deberá prepararse para cumplir con su destino.

Pese a que inicialmente se siente menospreciado, Naofumi esta ansioso por iniciar su aventura en este mundo fantástico. Sin embargo, ese presentimiento se hace realidad cuando Naofumi es acusado falsamente. Despreciado y humillado; incluso por los demás héroes, las aventuras del Héroe del Escudo y su misión para salvar al mundo darán inicio con un corazón traicionado, lleno de odio y deseos de venganza.',
          'img_path' => 'visitor/images/entertainment/tate.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=jZvFEtR8RH0',
      ]);
      $tate->tag()->sync([1,17,18,19,20,35]); //drama, aventura, accion fantasia, peleas

      //15
      $full = Entertainment::create([
          'user_id' => '3',
          'name' => 'Fullmetal Alchemist: Brotherhood',
          'description' => 'La historia se centra en los hermanos Edward y Alphonse Elric, quienes viven en un pequeño pueblo de un país ficticio llamado Amestris.9​ Su padre, Hohenheim, se había marchado de su casa cuando aún eran pequeños y años más tarde su madre, Trisha Elric, muere por una enfermedad terminal, dejando a los hermanos Elric solos. Después de la muerte de su madre, Edward decide resucitarla a través de la alquimia,22​ una de las técnicas científicas más avanzadas conocidas por el hombre. Sin embargo, el intento resulta fallido y como consecuencia Edward pierde su pierna izquierda, y Alphonse su cuerpo. En un esfuerzo por salvar a su hermano, Edward sacrifica su brazo derecho para sellar el alma de Alphonse en una armadura.23​ Tras esto, un alquimista llamado Roy Mustang visita a los hermanos Elric y le propone a Edward convertirse en un miembro de las Fuerzas Armadas del Estado y así encontrar una forma de recuperar sus cuerpos.',
          'img_path' => 'visitor/images/entertainment/full_metal.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=2uq34TeWEdQ',
      ]);
      $full->tag()->sync([5,7,11,17,18,20, 31,35]); //perdidamiembros,final satisfactorio, terminado, aventrua, fantasaia, peleas, 31

      //16
      $darker = Entertainment::create([
          'user_id' => '3',
          'name' => 'Darker than Black: Kuro no Keiyakusha',
          'description' => 'La historia gira en torno a Hei, un contratista que trabaja para una de esas organizaciones misteriosas, denominada El Sindicato. Es enviado a Tokyo bajo la falsa identidad de un estudiante chino de intercambio, Lee Shen Shun. Su código es BK201, "El Shinigami negro" y es acompañado por una unidad de esa organización. Dicha unidad está conformada por Hei, Yin, Mao y Huang. En un principio, vemos las misiones u operaciones asignadas por El Sindicato a la unidad de Hei y como trabajan para cumplirlas. Y por otro lado, vemos como la unidad especial de la Policía de Japón, encargada de investigar los casos relacionados con contratistas, va tratando de resolver los incidentes en donde Hei y otros contratistas de diferentes organizaciones o instituciones, participan.',
          'img_path' => 'visitor/images/entertainment/darker.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=379VTZNVbKg',
      ]);
      $darker->tag()->sync([2,19,24,27,35]); //accion, sci-fi, misterio, super

      //17
      $no_game = Entertainment::create([
          'user_id' => '3',
          'name' => 'No Game No Life',
          'description' => 'La historia está protagonizada por Sora y Shiro, hermano y hermana, que son muy famosos en todo Internet como NEETs y hikikomoris que se pasan el día jugando a videojuegos, tanto que son una leyenda. Los dos consideran el mundo real como “un juego malo”. Un día, un chico llamado “Dios” les invoca a otro mundo. Allí, Dios ha prohibido las guerras y declara que en el mundo todo se decidirá mediante juegos, incluso cuáles serán las fronteras entre países. ',
          'img_path' => 'visitor/images/entertainment/no_game.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=bxhOeUYssOw',
      ]);
      $no_game->tag()->sync([16,17,18,21,32,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //18
      $evangelion = Entertainment::create([
          'user_id' => '1',
          'name' => 'Neon Genesis Evangelion',
          'description' => 'La serie se inicia en el año 2015 de la era cristiana, quince años después del primer y desastroso contacto con unos misteriosos seres conocidos como ángeles, que resultó en un cataclismo a escala mundial llamado Segundo Impacto, que redujo a la mitad la población humana en la Tierra. Para prevenir futuros ataques de ángeles, la ONU estableció en Tokio-3 la organización NERV, la cual desarrolló una serie de gigantes biomecánicos llamados Evangelion —abreviado EVA— para combatirlos. Debido a que los Evangelion solo pueden ser pilotados por adolescentes,el dirigente de NERV, Gendō Ikari, se comunica con su distanciado hijo, Shinji, para que pilote la Unidad 01 de los Evangelion, y acabe con el Tercer Ángel, que se halla atacando la ciudad.',
          'img_path' => 'visitor/images/entertainment/evangelion.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=py_MdrpI5vQ',
      ]);
      $evangelion->tag()->sync([1,2,3,4,5,6,10,11,22,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //19
      $monogatari = Entertainment::create([
          'user_id' => '1',
          'name' => 'Monogatari Series',
          'description' => 'Narra la historia de un estudiante de preparatoria llamado Araragi Koyomi que es convertido en vampiro al salvar a una vampiresa llamada Kiss Shot Acerola Orion Heart Under Blade. La historia sigue las aventuras de Araragi y como se enfrenta a las excentricidades que se encuentra en su día a día con la ayuda de sus amigos.',
          'img_path' => 'visitor/images/entertainment/monogatari.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=1roUrSIHSmc',
      ]);
      $monogatari->tag()->sync([1,5,11,13,14,16,24,27,28,30,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //20
      $madoka = Entertainment::create([
          'user_id' => '1',
          'name' => 'Mahou Shoujo Madoka★Magica',
          'description' => 'Después de tener una extraña pesadilla, Madoka Kaname, una chica de 14 años, encuentra a una criatura mágica llamada Kyuubey. A Madoka y a Sayaka Miki, su amiga, les ofrece la oportunidad de ser Puella Magi y arriesgar sus vidas para luchar contra brujas.',
          'img_path' => 'visitor/images/entertainment/madoka.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=XUmZIIYiuA4',
      ]);
      $madoka->tag()->sync([1,4,5,9,11,15,19,20,22,24,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //21
      $code = Entertainment::create([
          'user_id' => '1',
          'name' => 'Code Geass: Hangyaku no Lelouch',
          'description' => '10 de agosto de 2010 del calendario imperial, el Sacro Imperio de Britannia declaró la guerra a Japón. Sobrepasó a las fuerzas japonesas y conquistó el país en menos de un mes, haciendo uso de sus nuevas armas robóticas, los Knightmare Frames. Japón perdió su libertad y derechos, y la ahora colonia pasó a ser llamada "Área 11". Sus habitantes, ahora llamados "Elevens" (En español: Onces), fueron obligados a sobrevivir en guetos. Sin embargo aún persisten grupos que se resisten y luchan contra el Imperio por la independencia de Japón.

Después de que su padre, el Emperador de Britannia, Charles Di Britannia, no hiciese nada para atrapar a los terroristas que asesinaron a su madre y dejaron ciega y discapacitada a su hermana, Lelouch, el protagonista, juró destruir Britannia siendo un niño. Siete años más tarde, el Área 11 se vio sumergida en ataques terroristas. Lelouch, envuelto en uno de ellos, conoce a una misteriosa chica llamada C.C., con quien realiza un contrato a cambio de un poder llamado "Geass". Con él, Lelouch finalmente tiene el poder que necesita para derrotar a Britannia y realizar sus dos deseos: vengar a su madre y construir un mundo en el que su amada hermana pueda vivir feliz. Para eso Lelouch crea "La Orden de los Caballeros Negros" convirtiéndose en Zero, líder de las tropas rebeldes con su lema: "Nosotros protegeremos a los débiles de aquellos que se aprovechan" y enfatizando la justicia. Desde ese momento, se preocupa por liderar la rebelión contra el imperio de Britannia.',
          'img_path' => 'visitor/images/entertainment/code_geass.jpeg',
          'youtube_link' => 'https://www.youtube.com/watch?v=G8CFuZ9MseQ',
      ]);
      $code->tag()->sync([1,6,7,8,9,11,12,20,31,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //22
      $steins = Entertainment::create([
          'user_id' => '1',
          'name' => 'Steins;Gate',
          'description' => 'El autoproclamado científico loco, Rintarou Okabe, va a un seminario sobre el viaje en el tiempo con su amiga, Mayuri Shiina. Una vez allí, conoce a una chica llamada Kurisu Makise que afirma haberlo conocido 15 minutos antes, a pesar de que es la primera vez que él la ve. Más tarde, Rintarou escucha un grito y descubre que Kurisu ha sido apuñalada. Cuando envía un mensaje a otro de sus compañeros de investigación, Itaru Hashida (también llamado Daru), Rintarō tiene una experiencia extraña, la calle de repente se queda vacía y un satélite extraño se ha estrellado contra el edificio. Más tarde, mientras juega con su microondas a control remoto, que convierte los plátanos en una sustancia gelatinosa, Daru le dice a Okabe que el seminario que supuestamente asistió fue cancelado, lo cual lo sorprende. Después, Rintarō descubre que el mensaje de texto que envió a Hashida había sido enviado hace una semana, justo antes de encontrarse con Kurisu, la cual está viva.',
          'img_path' => 'visitor/images/entertainment/steins.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=dd7BILZcYAY',
      ]);
      $steins->tag()->sync([1,2,4,7,9,11,12,22,29]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //23
      $suzumiya = Entertainment::create([
          'user_id' => '1',
          'name' => 'Suzumiya Haruhi no Yuuutsu',
          'description' => 'Suzumiya Haruhi no Yūutsu se enfoca en la vida de la estudiante de preparatoria Haruhi Suzumiya y de aquellos que son involucrados en sus locuras. Aunque Haruhi es el personaje central, la historia es contada desde el punto de vista de Kyon, uno de sus compañeros de clase.

Kyon es un estudiante de preparatoria superior que recientemente ha dejado atrás sus fantasías de espers, viajeros del tiempo y aliens, junto con la escuela secundaria inferior. Sin embargo, cuando elige hablar con una chica excéntrica que responde al nombre de Haruhi Suzumiya el primer día de clase, inintencionalmente desata una cadena de eventos que lo llevan a situaciones enteramente diferentes del mundo real.',
          'img_path' => 'visitor/images/entertainment/suzumiya.png',
          'youtube_link' => 'https://www.youtube.com/watch?v=KFOw_sokB50',
      ]);
      $suzumiya->tag()->sync([1,2,15,21,23,27,29,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //24
      $gatsu = Entertainment::create([
          'user_id' => '1',
          'name' => '3-gatsu no Lion',
          'description' => 'Rei es un jugador profesional de shōgi de 17 años que vive solo. Cuando era niño perdió a sus padres y a su hermana menor en un accidente automovilístico; y fue entonces adoptado por un amigo de su padre. Actualmente está separado de su familia adoptiva y apenas tiene amigos. Entre sus conocidos se encuentra una familia formada por una mujer joven, Akari Kawamoto; y sus hermanas menores, Hinata y Momo, que también tienen varios gatos. A medida que la historia avanza, Rei se enfrenta a su maduración como jugador y como persona, mientras desarrolla sus relaciones con los demás, especialmente con las hermanas Kawamoto.',
          'img_path' => 'visitor/images/entertainment/3gatsu.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=cKWqPXkLgzY',
      ]);
      $gatsu->tag()->sync([1,17,22,30,33,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //25
      $houseki = Entertainment::create([
          'user_id' => '1',
          'name' => 'Houseki no Kuni',
          'description' => 'En un futuro lejano, ha nacido una nueva forma de vida bautizada como ‘houseki’ (“gemas”). Las 28 houseki, con diferentes cometidos como guerrero o médico, deben luchar contra los ‘tsukijin’ (“gente de la Luna”), que tienen como objetivo convertirlas en objetos decorativos. A pesar de su deseo de combatir a los tsukijin, Phos es una houseki sin ocupación hasta que Kongo, el jefe de las muchachas, le encarga editar una revista sobre historia natural.',
          'img_path' => 'visitor/images/entertainment/houseki.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=C9MuI4gfyiA',
      ]);
      $houseki->tag()->sync([2,5,13,17,19,20,24,30,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super

      //26
      $ano = Entertainment::create([
          'user_id' => '1',
          'name' => 'Ano Hi Mita Hana no Namae wo Bokutachi wa Mada Shiranai.',
          'description' => 'Un grupo de amigos de la infancia se separan debido a un trágico accidente en el cual perdieron a una de sus amigas. Jinta deberá reunir a sus antiguos amigos de la infancia ya que esa amiga que perdieron regresa como un espíritu para cumplir una promesa que hizo antes de morir, esta misión revelara nuevos y viejos sentimientos en los personajes para conseguir ese único deseo.',
          'img_path' => 'visitor/images/entertainment/ano.jpg',
          'youtube_link' => 'https://www.youtube.com/watch?v=o1JrFtycErY',
      ]);
      $ano->tag()->sync([1,8,11,16,21,22,24,35]); //aventura,comedia,supernatural accion, sci-fi, misterio, super


    }
}
