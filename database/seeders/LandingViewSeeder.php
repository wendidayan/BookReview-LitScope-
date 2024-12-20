<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandingView;

class LandingViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LandingView::create([
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

        // Second entry (new book)
        LandingView::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'rating' => 5,
            'genres' => 'Classic, Fiction, Drama',
            'published' => '1925-04-10',
            'format' => '180 pages',
            'language' => 'English',
            'about' => 'A story about the American dream, love, and tragedy set in the 1920s.',
            'review' => 'An iconic novel that explores themes of ambition, love, and the decay of American society.',
            'about_author' => 'F. Scott Fitzgerald was an American novelist and short story writer, best known for his novel The Great Gatsby.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        LandingView::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'rating' => 5,
            'genres' => 'Classic, Fiction, Drama',
            'published' => '1925-04-10',
            'format' => '180 pages',
            'language' => 'English',
            'about' => 'A story about the American dream, love, and tragedy set in the 1920s.',
            'review' => 'An iconic novel that explores themes of ambition, love, and the decay of American society.',
            'about_author' => 'F. Scott Fitzgerald was an American novelist and short story writer, best known for his novel The Great Gatsby.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
