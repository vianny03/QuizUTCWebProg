<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category =['Comedy', 'Fiction', 'Mystery', 'Science Fiction', 'Fantasy', 'Romance', 'Historical', 'Biography', 'Young Adult', 'Horror', 'Non-fiction'];

        foreach($category as $c){
            Category::create([
                'category' => $c
            ]);
        }
    }
}
