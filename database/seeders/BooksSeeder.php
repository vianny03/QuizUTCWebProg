<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('en_US');

        $book_cover = [
            'https://marketplace.canva.com/EAFFEs6P168/1/0/1003w/canva-orange-green-watercolor-soft-cute-cartoon-love-romance-book-cover-5Zk2VM0-EAc.jpg',
            'https://i.pinimg.com/474x/a7/91/62/a7916230aedcdce47a4dfbff5247f0ce.jpg',
            'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/contemporary-fiction-night-time-book-cover-design-template-1be47835c3058eb42211574e0c4ed8bf_screen.jpg?ts=1637012564',
            'https://i.pinimg.com/736x/b6/1c/96/b61c961d71f82ce270698ba5b6ecc3ff.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7B-5DYnVMP8DDI6BLsgHz6AVTs5k7LzXDOw&usqp=CAU',
            'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/contemporary-fiction-night-time-book-cover-design-template-1be47835c3058eb42211574e0c4ed8bf_screen.jpg?ts=1637012564',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHvXFCWk4Ue714CXrldrMhGwxAMg5QILyMVg&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS44Ikz5jD3_306-TNqoAK5Go9o1grVT9NVVA&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQB-3-cJ6tpQ6cFUjCach0R1dTiXdhXI0AtA&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB1D0mKUmwVDuDw3NThb4a8ULXLbw2Zva8ag&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHxG94GriGy7XUjtU1kNwh-mTqakdiGC4JVw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDLk4vqROBAoFOvwvf4bN6AJtCj0mGZafP-g&usqp=CAU',
            'https://s26162.pcdn.co/wp-content/uploads/2021/10/The-Catcher-in-the-Rye-First-Edition-cover-E.-Michael-Mitchell.jpg'
        ];

        for($i=0; $i<=80 ; $i++){
            Book::create([
                'publisher_id' => rand(1, 15),
                'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'author' => $faker->name(),
                'synopsis' => $faker->paragraph($nb=rand(1,4), $asText = true),
                'image' => $book_cover[rand(0,12)]
            ]);
        }
    }
}
