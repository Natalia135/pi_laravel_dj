<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $people = [];

        foreach(range(1,200) as $i) {
            DB::table('People')->insert([
                'name' => $faker->name,
                'surname' => $faker->lastname,
                'phone_number' => $faker->phoneNumber,
                'adress' => $faker->address,
                'country' => $faker->country,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        //
    }
}
}