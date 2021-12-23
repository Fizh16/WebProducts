<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login\index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'inputEmail' => 'required|email',
            'inputPassword' => 'required'
        ], $message = [
            'inputEmail.required' => "Email can't be blank",
            'inputEmail.email' => "Use the correct email",
            'inputPassword.required' => "Password can't be blank"
        ]);

        $credentials = [
            'email' => $request->inputEmail,
            'password' => $request->inputPassword
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'error' => 'Login failed!',
        ]);
    }
}
