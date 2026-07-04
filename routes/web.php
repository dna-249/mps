<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ChallengeController, DashboardController, PageController};
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\{RegisterController, LoginController};
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

// The list of all challenges
Route::get('/challenges', function () {
    return view('challenges.index');
});

// The specific detail page for a challenge
// {slug} is a placeholder for the challenge name (e.g., arewa-2026)
Route::get('/challenges/{slug}', function ($slug) {
    // In a real app, you would fetch data from a database here
    return view('challenges.show', ['slug' => $slug]);
});


Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::middleware(['auth'])->group(function () {
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Add this to your routes/web.php
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');
    Route::get('/application/view', [ApplicationController::class, 'show'])->name('application.view');

    Route::get('/application-success', function () {
    return view('applications.success');
})->name('applications.success');
    Route::get('/apply', [ApplicationController::class, 'create'])->name('applications.create');
    Route::post('/apply', [ApplicationController::class, 'store'])->name('applications.store');
    Route::get('/application-status', [ApplicationController::class, 'status'])->name('applications.status');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/submissions', [AdminController::class, 'submissions'])->name('admin.submissions');
    Route::post('/submissions/{id}/approve', [AdminController::class, 'approve'])->name('admin.approve');
});