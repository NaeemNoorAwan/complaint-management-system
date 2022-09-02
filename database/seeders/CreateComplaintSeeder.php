<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Complaint;
use DB;
use Faker\Factory as Faker;

class CreateComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,50) as $key => $value){
            DB::table('complaints')->insert([
            'title'         => $faker->text(7),
            'description'   => $faker->text(100),
            'email'         => $faker->email,
            'phone_number'  => $faker->phoneNumber,
            'assign_to'     => $faker->numberBetween($min = 3, $max = 7),
            'status'        => $faker->numberBetween($min = 0, $max = 2),
            ]);
        }
    }
}
