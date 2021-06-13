<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,1000) as $index) {
          DB::table('posts')->insert([
            'title' => $faker->title,
            "body" =>  $faker ->body,
          ]);
        }
    }
}
