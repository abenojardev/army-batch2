<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// import db facade
use DB, Carbon;

class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for($i=0; $i <= 1000; $i++)
        {
            array_push($data,[
                'dog_tag_number' => 'MARPH20210001',
                'registration_number' => 1278459,
                'name' => 'Costika',
                'kennel' => 'Marball',
                'breeder' => 'Mark',
                'owner' => 'Alex',
                'color' => 'brown, black',
                'breed' => 'German Shepherd',
                'sire' => 2,
                'dam' => 3,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now()
            ]);
        }

        DB::table('dogs')->insert($data);
    }
}
