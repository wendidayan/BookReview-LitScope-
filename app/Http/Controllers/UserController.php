<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use App\Models\Comment; 
use App\Models\LandingView; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    
    public function homepage()
    {
        return view('WelcomePage'); //welcome page
    }
    public function showLoginForm()
    {
        return view('login-page'); 
    }

    public function logrequest(Request $request)
    {
        // Validate the request input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Retrieve the user by username
        $user = UserLogin::where('username', $request->username)->first();
        

        if ($user) {
            Log::info('User found', ['username' => $user->username]);
        } else {
            Log::error('User not found');
        }

         // Check if username is 'admin' and password is 'admin123'
         if ($request->username == 'admin' && $request->password == 'admin123') {
            // Log in as admin
            Log::info('Admin logged in');
            Auth::loginUsingId(1);  // Assuming the admin's ID is 1

            // Redirect to the dashboard
            return redirect()->route('AdminDashboard');
        }
    
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            Log::info('User logged in successfully');

            //return redirect()->route('landing');

            //Retrieve user count
            $userCount = UserLogin::count();
            $bookCount = LandingView::count();
            $popularBooks = LandingView::all();
            $totalComments = Comment::whereNull('parent_id')->count();
            $totalAuthors = LandingView::distinct('author')->count('author');
            $currentUser = auth()->user();

            foreach ($popularBooks as $index => $book) {
                $book->image_url = asset('assets/img/Asset ' . ($index + 1) . '.png');
            }
    

            return view('LandingPage', compact( 'userCount', 'popularBooks', 'bookCount', 'totalComments', 'totalAuthors', 'currentUser'));
            } else {
                Log::warning('Invalid credentials provided');
                return back()->withErrors(['Invalid credentials.']);
            }
        }

    public function register(Request $request)
    {
        Log::info('Register method triggered');

        $request->validate([
            'username' => 'required|string|unique:user_logins,username',
            'password' => 'required|string|min:6',
            'birthday' => 'required|date',
        ]);

        UserLogin::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
        ]);

         // Flash a message to the session
         Log::info('Register controller triggered for user: ' . $request->username);


        return redirect()->route('login-page')->with('success', 'Account created successfully! Please login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out.');
    }

    public function showUsers()
    {
        // Fetch all users from the database
        $users = UserLogin::all();

        // Get the authenticated user's data
        $currentUser = auth()->user();

        // Pass the users to the Blade template
        return view('AdminUsers', compact('users', 'currentUser'));
    }

    public function showBooks()
    {
        // Fetch all users from the database
        $allBooks = LandingView::all();
        $currentUser = auth()->user();

        // Pass the users to the Blade template
        return view('AdminBooks', compact('allBooks', 'currentUser'));
    }

    public function showDashboard()
    {

        $currentUser = auth()->user();

        // Count the total number of users
        $userCount = UserLogin::count();

        // Number of users above age 18 (example condition)
        $adultUsers = UserLogin::where('birthday', '<=', now()->subYears(18))->count();

        // Calculate the percentage
        $userPercentage = $userCount > 0 ? ($adultUsers / $userCount) * 100 : 0;

        // Count the number of comments that are not replies (parent_id is null)
        $totalComments = Comment::whereNull('parent_id')->count();

        // Count the number of comments with a rating (reviews)
        $totalReviews = Comment::whereNotNull('rating')->whereNull('parent_id')->count();

        // Calculate the percentage of reviews (comments with a rating)
        $reviewPercentage = $totalComments > 0 ? ($totalReviews / $totalComments) * 100 : 0;

        // Count the number of books
        $totalBooks = LandingView::count();

        // Calculate the percentage
        $reviewPercentage = $totalBooks > 0 ? ($totalReviews / $totalBooks) * 100 : 0;

        // Format the percentage with two decimal places
        $formattedReviewPercentage = number_format($reviewPercentage, 2);

        // Count the number of books with a rating
        $booksRatedCount = Comment::whereNotNull('rating')->count();

        // Calculate the percentage of books rated
        $booksRatedPercentage = $totalBooks > 0 ? ($booksRatedCount / $totalBooks) * 100 : 0;

        // Get the number of users per month
        $userCountsByMonth = UserLogin::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Prepare an array for the chart labels and data
        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $data = array_fill(0, 12, 0); // Initialize data array with 0 for each month

        // Populate data array with user counts per month
        foreach ($userCountsByMonth as $userCountData) {
            $data[$userCountData->month - 1] = $userCountData->count; // Adjust to zero-indexed
        }
        
    // Fetch landing views from the 'landing_views' table
    $landingViews = LandingView::all();  // Fetch all records from the landing_views table

    // Initialize arrays to store genres
    $genreLabels = [];
    $genreData = [];

    // Loop through the landing views and count genres
    foreach ($landingViews as $landingView) {
        // Assuming 'genres' is stored as a comma-separated string in the 'genres' column
        $genres = explode(',', $landingView->genres);  // Replace 'genres' with the actual column name in your table
        
        foreach ($genres as $genre) {
            $genre = trim($genre);  // Clean any extra spaces
            if (!in_array($genre, $genreLabels)) {
                $genreLabels[] = $genre;
                $genreData[] = 1;  // Initialize the count for this genre
            } else {
                $key = array_search($genre, $genreLabels);
                $genreData[$key] += 1;  // Increment the count for this genre
            }
        }
    }

    //count the number of pending books to store in database to be display in homepage
    $pendingBooksCount = LandingView::where('approval_status', 'pending')->count();

    $pendingBooksPercentage = $totalBooks > 0 ? ($pendingBooksCount / $totalBooks) * 100 : 0;
    $currentUser = auth()->user();
    $formattedReviewPercentage = number_format($reviewPercentage, 2);


    // Pass data to the AdminDashboard view
        return view('AdminDashboard', compact('userCount', 'userPercentage', 'totalComments', 'reviewPercentage', 'totalBooks', 'booksRatedPercentage', 'data', 'labels', 'genreLabels', 'genreData', 'pendingBooksCount', 'pendingBooksPercentage', 'currentUser', 'formattedReviewPercentage'));
    }


}