<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Book::create([
            'title' => 'Daisy Jones & The Six',
            'description' => 'A gripping oral history of a fictional 1970s rock band, exploring fame, love, and creative struggles through interview-style storytelling.',
            'price' => 17.99,
            'stock' => 100,
            'cover_photo' => 'daisy.jpg',
            'genre_id' => 1,
            'author_id' => 1 
        ]);

        Book::create([
            'title' => 'It',
            'description' => 'A terrifying story of a shape-shifting entity that emerges every 27 years in the town of Derry to prey on children’s deepest fears.',
            'price' => 20.00,
            'stock' => 50,
            'cover_photo' => 'it.jpg',
            'genre_id' => 4,
            'author_id' => 2 
        ]);

        Book::create([
            'title' => 'It Ends With Us',
            'description' => 'A heart-wrenching tale of love and resilience, dealing with the complexities of abusive relationships and the courage to break the cycle.',
            'price' => 14.50,
            'stock' => 80,
            'cover_photo' => 'itendswithus.jpg',
            'genre_id' => 1, 
            'author_id' => 3 
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'A practical guide to building good habits and breaking bad ones, supported by psychological research and real-world applications.',
            'price' => 18.00,
            'stock' => 150,
            'cover_photo' => 'atomic.jpg',
            'genre_id' => 5, 
            'author_id' => 4 
        ]);

        Book::create([
            'title' => 'Project Hail Mary',
            'description' => 'A lone astronaut wakes up with no memory, discovering he’s the only hope to save humanity from extinction. A thrilling blend of science and survival.',
            'price' => 22.99,
            'stock' => 60,
            'cover_photo' => 'hailmary.jpg',
            'genre_id' => 3,
            'author_id' => 5 
        ]);
    }
}
