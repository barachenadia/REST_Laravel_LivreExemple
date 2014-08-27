<?php

// Composer: "fzaninotto/faker": "v1.4.0"
// use Faker\Factory as Faker;

class LivresTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();
		// foreach(range(1, 10) as $index)
		// {
		// 	Livre::create([
		// 	]);
		// }
         $livres = array(
            array(

                'titre' => 'La grande barrique',
                'auteur' => 'Le Gnouf'
            ),
            array(

                'titre' => 'Ma mer',
                'auteur' => 'Jean Veut'
            )
        );

        DB::table('livres')->insert($livres);
    }

	}


