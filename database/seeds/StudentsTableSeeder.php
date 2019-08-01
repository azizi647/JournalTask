<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('JurnalTask\Student');

        for($i=1; $i<=4; $i++){
    		DB::table('students')->insert([
	            'first_name' => $faker->firstName(),
	            'last_name' => $faker->lastName(),
//                'class' => $faker->numberBetween(1,11),
                'class' => '10',
                'gender' => $faker->randomElement(['male','female']),
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
