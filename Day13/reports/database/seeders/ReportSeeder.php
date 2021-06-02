<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;
use Faker\Factory;

// faker
class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // this will run the script for x amount of times
        for ($i=0; $i <= 1000; $i++) { 
            //create customer

            // initiate faker
            $faker = Factory::create();
            
            $customer = Customer::create([
                'full_name' => '',
                'country' => '',
                'age' => '',
                'gender' => '',
                'device' => ''
            ]);
        }
    }
}
