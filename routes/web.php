<?php

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatesController; // For handling multiple candidates
use App\Http\Controllers\CandidateController; // For handling a single candidate
use App\Http\Controllers\VotingController;

// Authentication Routes
Route::get('/', function () {
    return view('Voting.login');
})->name('Voting.Login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', function () {
    Auth::logout(); // Log the user out
    return redirect()->route('Voting.Login'); // Redirect to the login page
})->name('logout');

// Home Route
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//Candidate Routes
Route::prefix('candidates')->name('candidates.')->group(function () {
    Route::get('/', [CandidateController::class, 'index'])->name('index'); // List all candidates
    Route::get('/create', [CandidateController::class, 'create'])->name('create'); // Show form to create a new candidate
    Route::post('/', [CandidateController::class, 'store'])->name('store'); // Store a new candidate
    Route::get('/{candidate}', [CandidateController::class, 'show'])->name('show'); // Show a specific candidate
    Route::get('/{candidate}/edit', [CandidateController::class, 'edit'])->name('edit'); // Show form to edit a candidate
    Route::put('/{candidate}', [CandidateController::class, 'update'])->name('update'); // Update a specific candidate
    Route::delete('/{candidate}', [CandidateController::class, 'destroy'])->name('destroy'); // Delete a specific candidate
});

// Voting Routes
Route::get('/vote', [VotingController::class, 'index'])->name('voting.index');
Route::post('/vote', [VotingController::class, 'vote'])->name('voting.vote');

// Voting Candidates Route
Route::get('/Voting/candidates', function () {
    return view('Voting.candidates');
})->name('Voting.Candidates');

// Optional: Route for voting home (if needed)
Route::match(['get', 'post'], '/voting/home', function () {
    return view('Voting.home');
})->name('Voting.Home');