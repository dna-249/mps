<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\MediaPost;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the MPS Media homepage with all dynamic data.
     */
    // In app/Http/Controllers/HomeController.php

public function index(): View
{
    // Use an empty collection if the table doesn't exist yet
    try {
        $activeChallenge = Challenge::where('status', 'active')->first();
        $latestMedia = MediaPost::latest()->take(6)->get();
        $winners = MediaPost::where('category', 'winner')->limit(5)->get();
    } catch (\Exception $e) {
        $activeChallenge = null;
        $latestMedia = collect();
        $winners = collect();
    }

    return view('home', compact('activeChallenge', 'latestMedia', 'winners'));
}
}