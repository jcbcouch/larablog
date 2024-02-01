<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function login() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

    public function profile() {
        return view('profile');
    }

    public function update(Request $request) {
        $user = User::where('email', auth()->user()->email)->first();

        // $formFields = [
        //     'username' => $request->username,
        //     'email' => $request->email
        // ];

        $formFields = $request->validate([
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'email'],
        ]);

        if($request->hasFile('pic')) {
            $formFields['pic'] = $request->file('pic')->store('pics', 'public');
        }



        $user->update($formFields);

        return back()->with('message', 'profile updated successfully!');
    }

}