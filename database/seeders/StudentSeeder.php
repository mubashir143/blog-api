<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 1; $i<=10; $i++){

        $student = new Student;
        $student->name = $faker->name;
        $student->email = $faker->email;
        $student->phone = $faker->randomNumber();
        $student->save();
        }

        
    
    }
}
