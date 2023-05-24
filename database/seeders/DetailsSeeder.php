<?php

namespace Database\Seeders;

use App\Models\Detail;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=200; $i++){
            Detail::create([
                'book_id' => rand(1, 80),
                'category_id' => rand(1,10)
            ]);
        }
    }
}
