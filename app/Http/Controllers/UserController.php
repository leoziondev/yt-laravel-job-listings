<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view ('auth.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'      => 'required|min:3',
            'email'     => ['required', 'email', Rule::unique('users', 'email')],
            'password'  => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => 'required'
        ]);

        if (auth()->attempt($data)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Email or password incorrect!'])->onlyInput('email');
    }
}
