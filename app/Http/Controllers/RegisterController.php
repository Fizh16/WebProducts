<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register\index');
    }

    public function save(RegisterRequest $request)
    {
        $user = new User();

        $user->name = $request->inputNama;
        $user->email = $request->inputEmail;
        $user->password = Hash::make($request->inputPassword);
        $user->role = $request->role;

        $user->save();

        return redirect()->route('login')->with('success', 'Please login first');
    }
}
