<?php

namespace App\Http\Controllers;

use App\Models\BookViewModel;
use Illuminate\Http\Request;

class BookViewController extends Controller
{
    // Show the form to add a new book and display existing books
    public function create()
    {
        $books = BookViewModel::all(); // Fetch all books
        return view('BookView', compact('books')); // Pass books to the view
    }

    // Store the book details in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'genres' => 'required|string',
            'published' => 'required|date',
            'format' => 'required|string',
            'language' => 'required|string|max:100',
            'about' => 'required|string',
            'review' => 'required|string',
            'about_author' => 'required|string',
        ]);

        BookViewModel::create($validated);

        return redirect()->route('bookView.create')->with('success', 'Book added successfully!');
    }

    // Show the details of a specific book
    public function show($id)
    {
      // Retrieve the book details
    $book = BookViewModel::findOrFail($id);

    // Check the book data
    dd($book);  // This will dump the book data and stop further execution

    return view('BookDetails', compact('book'));
    }
}
