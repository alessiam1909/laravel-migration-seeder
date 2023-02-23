<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train ;
use Faker\Generator as Faker;



class TreniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<=10; $i++){
            $train  = new Train;
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->word();
            $train->numero_carrozze = $faker->randomNumber(2, true);
            $train->in_orario = $faker->randomElement([true, false]);
            $train->cancellato = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
