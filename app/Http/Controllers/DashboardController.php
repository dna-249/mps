<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $user = auth()->user();
    $application = $user->application;

    // 6. Calculate Profile Completion Score (Example)
    $fields = ['name', 'email', 'phone', 'bio', 'profile_picture'];
    $completed = collect($fields)->filter(fn($field) => !empty($user->$field))->count();
    $completionScore = ($completed / count($fields)) * 100;

    return view('dashboard', compact('application', 'completionScore'));
}
}
