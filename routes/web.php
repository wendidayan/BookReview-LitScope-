<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookViewController;
use App\Http\Controllers\LandingViewController;
use App\Http\Middleware\CheckAge;
use App\Models\Landing;
use App\Models\UserLogin;


Route::get('/login-page', [UserController::class, 'index'])->name('login-page');
Route::post('/login-page', [UserController::class, 'login'])->name('login.submit');
Route::post('/signup', [UserController::class, 'register'])->name('signup.submit');


Route::get('/', [HomeController::class, 'index'])->middleware(CheckAge::class)->name('home'); // Home page route

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index'); // Dashboard main page
    Route::get('/user/{userId}', [DashboardController::class, 'show'])->name('dashboard.user'); // User-specific dashboard page
});

// Access Denied route
Route::get('/access-denied', function () {
    return view('access-denied');  // Display an access denied page
})->name('access.denied');

//Route::get('/', [LandingPageController::class, 'index'])->name('landing');

//Route::resource('landings', LandingPageController::class);

Route::get('/', [LandingViewController::class, 'index'])->name('landingView.index');
// Route to show details of a specific book by ID

// Define the routes here
Route::get('/book/{id}', [LandingViewController::class, 'show'])->name('bookView.show');
Route::post('/books/{bookId}/comments', [LandingViewController::class, 'storeComment'])->name('storeComment');
Route::post('/comments/{comment}/reply', [LandingViewController::class, 'storeReply'])->name('comments.reply');



//Route::get('/BookView', [BookViewController::class, 'create'])->name('bookView.create');
//Route::post('/BookView', [BookViewController::class, 'store'])->name('bookView.store');
//Route::get('/BookView/{id}', [BookViewController::class, 'show'])->name('bookView.show');

Route::get('/booklist', function () {
    return view('booklist');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['username' => session('user')]);
});


//New Added



Route::get('/AdminDashboard', [UserController::class, 'showDashboard'])->name('AdminDashboard');

Route::get('/AdminBooks', function () {
    return view('AdminBooks');
});

Route::get('/AdminUsers',[UserController::class, 'showUsers'])->name('users.index');

// Route to show the form for adding a new book (GET request)
//Route::get('/AdminAddBook', [LandingViewController::class, 'create'])->name('book.create');

// Route to handle storing the new book (POST request)
//Route::post('/AdminAddBook', [LandingViewController::class, 'store'])->name('book.store');

// Route to show the form for adding a new book
Route::get('/AdminAddBook', [LandingViewController::class, 'create'])->name('book.create');

// Route to handle storing the new book
Route::post('/AdminAddBook', [LandingViewController::class, 'store'])->name('book.store');

// Route to show books pending approval
//Route::get('/AdminAproveBook', [LandingViewController::class, 'showPendingBooks']);

//Route::post('/AdminAproveBook/approve/{id}', [LandingViewController::class, 'approveBook'])->name('approveBook');
//Route::post('/AdminAproveBook/reject/{id}', [LandingViewController::class, 'rejectBook'])->name('rejectBook');

// Route to show pending books for approval
//Route::get('/AdminAproveBook/pending-books', [LandingViewController::class, 'showPendingBooksForApproval'])->name('admin.pendingBooks');

// Route to approve a book
//Route::post('/AdminAproveBook/approve-book/{id}', [LandingViewController::class, 'approvePendingBook'])->name('admin.approveBook');

// Route to reject a book
//Route::post('/AdminAproveBook/reject-book/{id}', [LandingViewController::class, 'rejectPendingBook'])->name('admin.rejectBook');



Route::get('/AdminRemoveBook', [LandingViewController::class, 'viewBooks']);
Route::delete('/AdminRemoveBook/{id}', [LandingViewController::class, 'deleteBook'])->name('admin.removeBook');


Route::get('/AdminAproveBook', [LandingViewController::class, 'viewPendingBooks'])->name('admin.pendingBooks');

Route::post('/AdminAproveBook/approve-book/{id}', [LandingViewController::class, 'approveBook'])->name('admin.approveBook');
Route::post('/AdminAproveBook/reject-book/{id}', [LandingViewController::class, 'rejectBook'])->name('admin.rejectBook');














