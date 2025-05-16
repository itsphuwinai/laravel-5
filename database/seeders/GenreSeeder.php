<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiction',
            'description' => 'Imaginative narrative literature created from the authors creativity'
        ]);

        Genre::create([
            'name' => 'Non-Fiction',
            'description' => 'Literature based on facts, real events, and real people.'
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'description' => 'Stories based on advanced science, technology, space, and time travel.'
        ]);

        Genre::create([
            'name' => 'Horror',
            'description' => 'A genre designed to frighten and unsettle the audience with suspenseful and eerie elements.'
        ]);

        Genre::create([
            'name' => 'Self-Help',
            'description' => 'Books written with the intention to instruct readers on solving personal issues.'
        ]);
    }
}
