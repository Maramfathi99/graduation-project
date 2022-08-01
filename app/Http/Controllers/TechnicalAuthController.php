<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicalAuthController extends Controller
{
    public function index()
    {
        return view('front.login');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('front.index')
                ->withSuccess('You have Successfully logged in');
        }

        return redirect("front-login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}
