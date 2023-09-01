<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i<11; $i++){
            $newContact = new Contact();
            $newContact->name = $faker->word();
            $newContact->surname = $faker->word();
            $newContact->email = $faker->email();
            $newContact->phone_number = $faker->ean13();

            $newContact->save();
        }
    }
}
