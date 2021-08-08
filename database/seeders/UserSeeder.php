<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use DB;
class UserSeeder extends Seeder
{
    public function run(){
        $faker = FakerFactory::create();
        $arrImg = [
            'storage/users/tlkvOFYKD6tL9vDfB1GpWnDgqIt2p2qLxk6cdr9P.jpg',
            'storage/users/6cmdTLPOzphORJdvTEBl4JKm8NDZTSpP0SnJfY0C.jpg',
            'storage/users/6cmdTLPOzphORJdvTEBl4JKm8NDZTSpP0SnJfY0C.jpg',
            'storage/users/QyNkgVyBVBVqw5bUsxI7oFEMhAKOVjwblIqCSepE.jpg',
            'storage/users/tTaYVPlzNwSS3mUhrFjoi7cfXgDkvmtGJn3HJ3ZG.jpg',
        ];

        for($i = 0; $i < 10; $i++){
            $data =[
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'address' => $faker->address,
                'image' => $arrImg[rand(0,4)],
                'gender' => rand(0,1),
                'role' => rand(1,2),

            ];
            DB::table('users')->insert($data);
        }

    }
}
