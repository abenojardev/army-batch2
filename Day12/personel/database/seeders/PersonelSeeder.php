<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory;
use Carbon\Carbon;
use App\Models\Personel;
use App\Models\Statistic;

class PersonelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i=0; $i <= 20; $i++){  
            $age = $faker->biasedNumberBetween(18, 50);

            $personel = Personel::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'middle_name' => strtoupper($faker->randomLetter()),
                'age' => $age,
                'birthday' => Carbon::now()->subYears($age),
                'rating' => $faker->sentence()
            ]);

            Statistic::create([
                'personel_id' => $personel->id,
                'height' => $faker->randomFloat(2, 120, 230),
                'weight' => $faker->randomFloat(2, 45, 150),
                'bmi' => $faker->randomElement(['obese','normal','underweight','overwieght','above normal'])
            ]);
        }
        

    }
}
