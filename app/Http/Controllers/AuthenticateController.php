<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
          return redirect()->intended('dashboard');
        }
    }

    public function logOut() {
        Auth::logout();

        return redirect()->route('home');
    }
}
