<?php

use Illuminate\Http\Request; 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VotingController;


Route::get('/', function () {
    return view('Voting.login');
})->name ('Voting.Login');


Route::get('/Voting/candidates', function () {
    return view('Voting.candidates');
})->name('Voting.Candidates');

Route::match(['get', 'post'], '/voting/home', function () {
    return view('Voting.home');
})->name('Voting.Home');


Route::post('/logout', function () {
    Auth::logout(); // Log the user out
    return redirect()->route('Voting.Login'); // Redirect to the login page
})->name('logout');


Route::post('/login', [AuthController::class,'login'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('candidates', [CandidatesController::class,'index']);
Route::get('candidates', [CandidateController::class, 'index'])->name('candidates.index');
Route::get('candidates/create', [CandidateController::class, 'create'])->name('candidates.create');
Route::post('candidates', [CandidateController::class, 'store'])->name('candidates.store');
Route::get('candidates/{candidate}', [CandidateController::class, 'show'])->name('candidates.show');
Route::get('candidates/{candidate}/edit', [CandidateController::class, 'edit'])->name('candidates.edit');
Route::put('candidates/{candidate}', [CandidateController::class, 'update'])->name('candidates.update');
Route::delete('candidates/{candidate}', [CandidateController::class, 'destroy'])->name('candidates.destroy');
// Route::get('/vote', [VotingController::class, 'index'])->name('vote.index');

// Route::post('/vote',[VotingController::class,'store'])->name('voting.vote');