<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Vaccination;


class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newVaccination = new Vaccination();
            $newVaccination->type = $faker->word();
            $newVaccination->manufacturer = $faker->word();
            
            $newVaccination->save();
        }
    }
}
