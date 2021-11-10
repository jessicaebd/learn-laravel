<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' =>   ['required', 'min:3', 'max:20', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:7|max:20'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        $request->session()->flash('success', 'Registrasi berhasil!');

        return redirect('/login');
    }
}
