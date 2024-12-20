<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Str;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'comments' => 'required|string|max:1000',
            'rate' => 'required|numeric|min:1|max:5',
        ]);

        // Generate a unique review_code
        $review_code = 'R' . strtoupper(Str::random(8)); // Random 8-character string prefixed with "R"

        // Create a new review
        Review::create([
            'review_code' => $review_code,
            'comments' => $request->comments,
            'rate' => $request->rate,
            'likes' => 0, // Default likes
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review submitted successfully.');
    }
}
