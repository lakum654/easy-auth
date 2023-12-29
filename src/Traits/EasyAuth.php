<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

trait EasyAuth
{

    public function showRegisterForm()
    {
        return view('easy-auth.register');
    }

    public function register(Request $request)
    {
        // Validate the registration request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Log in the newly registered user
        auth()->login($user);

        // Redirect to the intended page or a default dashboard route
        return redirect('/')->with('success', 'Registration successful! Welcome to our platform.');
    }

    public function showLoginForm()
    {
        return view('easy-auth.login');
    }

    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard'); // Redirect to the intended page or a default dashboard route
        }

        // Authentication failed
        return back()
        ->withErrors(['email' => 'These credentials do not match our records. Please check your email and password.'])
        ->withInput($request->only('email'));

    }

    public function logout()
    {
        // Custom logout logic
    }
}
