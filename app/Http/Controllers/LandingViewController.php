<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingView;
use App\Models\Comment;
use App\Models\UserLogin;

class LandingViewController extends Controller
{
    // Show the landing page with popular books
    public function index()
    {
        $popularBooks = LandingView::where('approval_status', 'approved')->get();
      

        foreach ($popularBooks as $index => $book) {
            $book->image_url = asset('assets/img/Asset ' . ($index + 1) . '.png');
        }

        return view('LandingPage', compact('popularBooks'));
    }

    public function show($id)
{
    $book = LandingView::with(['comments' => function($query) {
        // Retrieve only top-level comments (where parent_id is NULL)
        $query->whereNull('parent_id');
    }])->findOrFail($id);

    // Format the created and updated dates for each comment
    $book->genres = explode(',', $book->genres);

    foreach ($book->comments as $comment) {
        $comment->created_at = $comment->created_at->format('M d, Y');
        $comment->updated_at = $comment->updated_at->format('M d, Y');
    }

    return view('BookView', compact('book'));
}

public function create()
    {
        return view('AdminAddBook');  // Return the form view
    }
public function store(Request $request)
{
    // Validate form input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'genres' => 'required|array',  // Validate genres as an array
        'published' => 'required|date_format:Y-m-d',  // Specific date format validation
        'format' => 'required|string',
        'language' => 'required|string|max:100',
        'about' => 'required|string',
        'about_author' => 'required|string',
    ]);

    // Create the book record in the database
    LandingView::create([
        'title' => $validated['title'],
        'author' => $validated['author'],
        'genres' => implode(', ', $validated['genres']),  // Convert array to comma-separated string
        'published' => $validated['published'],
        'format' => $validated['format'],
        'language' => $validated['language'],
        'about' => $validated['about'],
        'about_author' => $validated['about_author'],
    ]);

    return redirect()->route('landingView.index')->with('success', 'Book added successfully!');
}



    // Store a comment (or reply) for a book
    public function storeComment(Request $request, $bookId)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:1000',
            'rating' => 'nullable|integer|min:1|max:5',  // Ensure rating is between 1 and 5
            'parent_id' => 'nullable|exists:comments,id',  // Make sure parent_id exists if provided
        ]);
        
        $userId = auth()->check() ? auth()->id() : null;

        // Create the comment (or reply)
        Comment::create([
            'book_id' => $bookId,
            'user_id' => $userId, // Guest if not logged in
            'comment' => $validated['comment'], 
            'rating' => $validated['rating'],  // Save the rating
            'parent_id' => $validated['parent_id'] ?? null, // Default to null if no parent_id
        ]);

        \Log::info('User ID during comment creation: ' . ($userId ?? 'Guest'));

        return redirect()->back()->with('success', 'Your comment has been posted!');
    }

    public function storeReply(Request $request, $commentId)
{
    $validated = $request->validate([
        'reply' => 'required|string|max:1000',
    ]);

    $userId = auth()->check() ? auth()->id() : null;

    // Create the reply
    Comment::create([
        'book_id' => $request->book_id, // Assuming book_id is passed from the reply form
        'user_id' => $userId,
        'comment' => $validated['reply'],
        'parent_id' => $commentId, // Set the parent_id to the original comment ID
    ]);

    \Log::info('User ID during reply creation: ' . ($userId ?? 'Guest'));

    return redirect()->back()->with('success', 'Your reply has been posted!');
}

public function viewBooks() // Correct method
{
    $Books = LandingView::where('approval_status', 'approved')->get();
    return view('AdminRemoveBook', compact('Books'));
}

 // Function to handle the deletion
 public function deleteBook($id)
 {
     // Find the book by its ID
     $book = LandingView::findOrFail($id);

     // Delete the book
     $book->delete();

     // Return a response
     return response()->json(['success' => true, 'message' => 'Book deleted successfully']);
 }


 public function viewPendingBooks()
 {
     // Fetch books with 'pending' approval status
     $pendingBooks = LandingView::where('approval_status', 'pending')->get();
 
     return view('AdminAproveBook', compact('pendingBooks'));
 }

 public function approveBook($id)
{
    $book = LandingView::findOrFail($id);
    $book->approval_status = 'approved';
    $book->save();

    return response()->json(['success' => true, 'message' => 'Book approved successfully!']);
}

public function rejectBook($id)
{
    $book = LandingView::findOrFail($id);
    $book->approval_status = 'rejected';
    $book->save();

    return response()->json(['success' => true, 'message' => 'Book rejected successfully!']);
}

}


