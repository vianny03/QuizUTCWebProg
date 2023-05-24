<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        for($i = 1; $i<=15;$i++){
            Publisher::create([
                'logo' => $faker->imageUrl(200,200, 'business'),
                'name' => $faker->company(),
                'address' => $faker->address(),
                'phone' => $faker->tollFreePhoneNumber(),
                'email' => $faker->email()
            ]);
        }

    }
}
