<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // Ensure this view exists
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->route('/voting/login')
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve the credentials from the request
        $credentials = $request->only('username', 'password');

        // Attempt to log the admin in
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to intended page
            return redirect()->intended('Voting.Home'); // Change '/home' to your desired route
        }

        // If login fails, redirect back with an error message
        return redirect()->route('/voting/login')->withErrors([
            'username' => 'Invalid credentials.',
        ]);
    }

    // Handle the logout request
    public function logout()
    {
        Auth::logout();
        return redirect()->route('/voting/login');
    }
}