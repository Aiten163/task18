<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function loginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($request->only(['email', 'password'])))
            return redirect('/');
        return back()->withErrors([
            'email' => 'Email or password incorrect'
        ]);
    }
    public function registrationForm()
    {
        return view('registration');
    }
    public function registration(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create($request->all());
        auth()->login($user);
        return redirect()->route('main');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function admin()
    {
        return view('admin');
    }
}
