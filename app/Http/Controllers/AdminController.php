<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm(): View|Factory|Application
    {
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboard(): View|Factory|Application
    {
        return view('admin.dashboard');
    }

    public function logout(): RedirectResponse {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
