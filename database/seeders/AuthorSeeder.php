<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Taylor Jenkins Reid',
            'photo' => 'taylor.jpg',
            'bio' => 'An American bestselling novelist known for emotionally resonant stories with complex female characters.'
        ]);

        Author::create([
            'name' => 'Stephen King',
            'photo' => 'stephen.jpg',
            'bio' => 'Legendary American horror and suspense author, known for his prolific work and iconic stories like It and The Shining.'
        ]);

        Author::create([
            'name' => 'Colleen Hoover',
            'photo' => 'colleen.jpg',
            'bio' => 'A contemporary romance author whose emotional narratives have captivated millions.'
        ]);

        Author::create([
            'name' => 'James Clear',
            'photo' => 'james.jpg',
            'bio' => 'Personal development expert and author of “Atomic Habits”, focused on behavior change.'
        ]);

        Author::create([
            'name' => 'Andy Weir',
            'photo' => 'andy.jpg',
            'bio' => 'A science fiction author best known for “The Martian”, blending humor and hard science.'
        ]);
    }
}
