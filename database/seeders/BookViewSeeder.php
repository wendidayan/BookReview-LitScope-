<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookViewModel;


class BookViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BookViewModel::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'author' => 'J.K. Rowling',
            'rating' => 4,
            'genres' => 'Magic, Adventure, Young Adult, Fantasy, Children',
           'published' => '1997-06-26',
            'format' => '333 pages',
            'language' => 'English',
            'about' => 'The story of a young wizard, Harry Potter, and his journey to discover his magical heritage.',
            'review' => 'An enthralling tale of magic, friendship, and courage that captivates readers of all ages.',
            'about_author' => 'J.K. Rowling is a British author best known for writing the Harry Potter series.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
