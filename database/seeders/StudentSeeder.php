<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use DB;

class StudentSeeder extends Seeder
{
   
    public function run()
    {
        $faker = FakerFactory::create();
        for($i = 0; $i < 20; $i++){
            $data =[
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'address' => $faker->address,
                'address' => $faker->address,

            ];
        }

        DB::table('users')->insert($data);
    }
}
