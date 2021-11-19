<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:25',
            'password' => 'required|min:7'
        ]);

        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return back()->with('status', 'Invalid login details!');
        }

        return redirect()->route('dashboard');
    }
}
