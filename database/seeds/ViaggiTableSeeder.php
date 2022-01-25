<?php

use App\Viaggio;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newViaggio = new Viaggio();
            $newViaggio->descrizione = $faker->text(200);
            $newViaggio->modalita = $faker->text(50);
            $newViaggio->citta = $faker->country;
            $newViaggio->nazione = $faker->state;
            $newViaggio->prezzo = $faker->randomFloat(2, 50, 10000);
            $newViaggio->save();
        }
    }
}
