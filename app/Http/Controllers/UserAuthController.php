<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    // Redirect authenticated admins away from login page
    public function __construct()
    {
        // Redirect authenticated admins to dashboard
        if (Auth::check()) {
            return redirect()->route('home')->send();
        }

        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('frontend.content.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('account');
        }

        return back()->with(['error' => 'Invalid credentials']);
    }

    public function showRegisterForm()
    {
        return view('frontend.content.auth.register');
    }

    public function register(Request $request)
    {
        // --
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}