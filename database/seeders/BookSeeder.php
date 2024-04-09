<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Models
use App\Models\Book;
// Helpers
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // import books
        $books = config('books');

        // create books
        foreach ($books as $book) {
            $newBook = Book::create([
                'title' => $book['title'],
                'slug' => Str::slug($book['title']),
                'description' => $book['description'],
                'author' => $book['author'],
                'image' => $faker->imageUrl(360, 540),
                'rating' => $faker->randomFloat(2, 0, 10),
                'votes' => $faker->randomNumber(4, false),
            ]);
        }
    }
}
