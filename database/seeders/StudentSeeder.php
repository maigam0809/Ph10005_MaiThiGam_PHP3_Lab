<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = FakerFactory::create();
        for($i = 0; $i < 20; $i++){
            $data =[
                'student_name' => $faker->text(11),
                'address' => $faker->address,
                'avatar' => $faker->image,
                'description' => $faker->text(200),

            ];
            DB::table('students')->insert($data);
        }

    }
}
