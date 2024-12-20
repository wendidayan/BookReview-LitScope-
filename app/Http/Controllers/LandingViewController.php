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
        $popularBooks = LandingView::where('approval_status', 'approved')->paginate(5);
        //$popularBooks = LandingView::take(5)->get(); 
        $userCount = UserLogin::count();
        $bookCount = LandingView::count();
        $totalComments = Comment::whereNull('parent_id')->count();
        $totalAuthors = LandingView::distinct('author')->count('author');
        $currentUser = auth()->user();

        foreach ($popularBooks as $index => $book) {
            $book->image_url = asset('assets/img/Asset ' . ($index + 1) . '.png');
        }

        return view('LandingPage', compact('popularBooks', 'bookCount', 'userCount', 'totalComments', 'totalAuthors', 'currentUser'));

    }

    public function show($id)
    {
        // Retrieve the first five books from the database
        $popularBooks = LandingView::where('approval_status', 'approved')->paginate(5);

        foreach ($popularBooks as $index => $book) {
            // Dynamically build the asset image path based on the book index (1, 2, 3, etc.)
            $book->image_url = asset('assets/img/Asset ' . ($index + 1) . '.png');
            
        }

        $book->author_url = asset('assets/img/Author ' . ($id) . '.jpg');

        $book = LandingView::with(['comments' => function($query) {
            // Retrieve only top-level comments (where parent_id is NULL)
            $query->whereNull('parent_id');
        }])->findOrFail($id);

        
        $currentUser = auth()->user();

        // Format the created and updated dates for each comment
        $book->genres = explode(',', $book->genres);

        foreach ($book->comments as $comment) {
            $comment->created_at = $comment->created_at->format('M d, Y');
            $comment->updated_at = $comment->updated_at->format('M d, Y');
        }

        return view('BookView', compact('book', 'popularBooks', 'currentUser'));
    }



    public function create()
    {
            $currentUser = auth()->user();
            return view('AdminAddBook', compact('currentUser'));  // Return the form view
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

        // Get the authenticated user's data
        //$currentUser = auth()->user();

        return redirect()->route('landingView.index')
                     ->with('success', 'Book added successfully!');
                     //>with('currentUser', $currentUser);
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


    public function showAll()
    {
        $popularBooks = LandingView::where('approval_status', 'approved')->paginate(10);
        $userCount = UserLogin::count();
        $bookCount = LandingView::count();
        $currentUser = auth()->user();

        foreach ($popularBooks as $index => $book) {
            $book->image_url = asset('assets/img/Asset ' . ($index + 1) . '.png');
        }
       
        return view('booklist', compact('popularBooks', 'userCount', 'bookCount', 'currentUser'));
    }

    public function viewBooks() // Correct method
    {
        $Books = LandingView::where('approval_status', 'approved')->get();
        $currentUser = auth()->user();

        return view('AdminRemoveBook', compact('Books', 'currentUser'));
    }

    // Function to handle the deletion
    public function deleteBook($id)
    {
        // Get the authenticated user's data
        $currentUser = auth()->user();

        // Find the book by its ID
        $book = LandingView::findOrFail($id);

        // Delete the book
        $book->delete();

        // Return a response with the currentUser data included
        return response()->json([
            'success' => true,
            'message' => 'Deleted successfully',
            'currentUser' => $currentUser // Pass currentUser data here
        ]);
    }

    public function showUserProfile()
    {
        $currentUser = auth()->user();
        $popularBooks = LandingView::all(); 
        $userCount = UserLogin::count();
        $bookCount = LandingView::count();
        $totalComments = Comment::whereNull('parent_id')->count();
        $totalAuthors = LandingView::distinct('author')->count('author');

        return view('UserProfile', compact('currentUser', 'popularBooks', 'userCount', 'bookCount', 'totalComments', 'totalAuthors'));
    }


    public function viewPendingBooks()
    {
        // Fetch books with 'pending' approval status
        $pendingBooks = LandingView::where('approval_status', 'pending')->get();
        $currentUser = auth()->user();
        return view('AdminAproveBook', compact('pendingBooks', 'currentUser'));
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