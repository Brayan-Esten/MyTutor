<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request){

        $validated =$request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:3', 'max:50']
        ]);

        $validated['password'] = bcrypt($validated['password']);

        // new user's membership by default is silver, and gets free 1 trial (free credit)
        $validated['membership_id'] = 1;
        $validated['fund'] = 150000;

        User::create($validated);

        // $request->session()->flash('success', 'Registration successful! Please log in');
        // or

        return redirect('/login')->with('success', 'Registration successful ! Please login');
    }
}
