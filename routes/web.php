<?php

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidatesController; // For handling multiple candidates
use App\Http\Controllers\CandidateController; // For handling a single candidate
use App\Http\Controllers\VotingController;
use App\Models\User;

// Authentication Routes
Route::get('/', function () {
    return view('/login');
})->name('/login');    


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
Route::get('/Voting/candidates',[CandidatesController::class, 'index'])->name('Voting.Candidates');

// Optional: Route for voting home (if needed)
Route::match(['get', 'post'], '/voting/home', function () {
    return view('Voting.home');
})->name('Voting.Home');

Route::middleware(['auth', 'role:admin'])->group(function () {
     Route::get('/admin', function () {
         return 'Welcome Admin!';
     });
 });

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', function () {
        return 'Welcome User!';
    });
});



Route::post('/login', function (Request $request) {
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $user = User::where('username', $request->username)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        // Log the user in
        auth()->login($user);

        // Debugging: Log the user's role
        Log::info('User  role: ' . $user->username); // Log the role for debugging

        // Redirect based on user role
        if ($user->username === 'admin') {
            return redirect('/candidates'); // Redirect admin to /candidates
        } else {
            return redirect('/home'); // Redirect user to /home
        }
    } else {
        return redirect()->route('login.form')->with('error', 'Invalid username or password');
    }
})->name('login.submit');




Route::get('/login', function () {
    return view('login');
})->name('login.form');


// Logout route
Route::get('/logout', function () {
    Session::forget('user');
    return redirect()->route('login.form');
})->name('logout');