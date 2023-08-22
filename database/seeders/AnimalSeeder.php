<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i<11; $i++){
            $newAnimal = new Animal();
            $newAnimal->name = $faker->word();
            $newAnimal->specie = $faker->word();
            $newAnimal->date_of_birth = $faker->date('Y_m_d');
            $newAnimal->genre = $faker->boolean();
            $newAnimal->owner = $faker->word();
            $newAnimal->note = $faker->paragraph();


            $newAnimal->save();
        }
    }
}
