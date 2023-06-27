<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'name' => 'Caraval',
                'genre' => 'Fantasy',
                'isbn' => '9788408169239',
                'author' => 'Stephanie Garber',
                'description' => 'A legendary competition. A mesmerizing romance. An unbreakable bond between two sisters.',
            ],
            [
                'name' => 'Legendary: A Caraval Novel',
                'genre' => 'Fantasy',
                'isbn' => '9781250095312',
                'author' => 'Stephanie Garber',
                'description' => 'A heart to protect. A debt to repay. A game to win.',
            ],
            [
                'name' => 'Finale: A Caraval Novel',
                'genre' => 'Fantasy',
                'isbn' => '9781250157669',
                'author' => 'Stephanie Garber',
                'description' => 'A love worth fighting for. A dream worth dying for. An ending worth waiting for.',
            ],
            [
                'name' => 'Babel, or the Necessity of Violence',
                'genre' => 'Fiction',
                'isbn' => '9780063021426',
                'author' => 'R. F. Kuang',
                'description' => 'Babel: Or the Necessity of Violence: An Arcane History of the Oxford Translators Revolution is a 2022 novel by R. F. Kuang.',
            ],
            [
                'name' => 'The Accidental Malay',
                'genre' => 'Fiction',
                'isbn' => '9789814984676',
                'author' => 'Karina Robles Bahrin',
                'description' => 'Jasmine Leong wants to be the next CEO of Phoenix, her family billion-ringgit company known especially for its bak kwa. But when Jasmine discovers she is actually a Malay Muslim, her newfound identity threatens to upend her life and ambitions.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
