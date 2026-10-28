<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showRegister()
    {
        return view('users.show');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        Auth::login($user);

        return redirect(route('posts.index'));

    }

    public function showLogin()
    {
        return view('users.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect(route('posts.index'));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        return redirect(route('posts.index'));
    }
}
