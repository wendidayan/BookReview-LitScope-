<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Generate a unique review code like "R2666"
        $reviewCode = 'R' . mt_rand(1000, 9999); // Or any other logic to generate a unique code

        // Create a review using the generated review code
        Review::create([
            'review_code' => $reviewCode,
            'comments' => 'This is a review comment.',
            'rate' => 5,
            'likes' => 10
        ]);
    }
}
