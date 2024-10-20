<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    // Redirect authenticated admins away from login page
    public function __construct()
    {
        // Redirect authenticated admins to dashboard
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard')->send();
        }

        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.content.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->with(['error' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
