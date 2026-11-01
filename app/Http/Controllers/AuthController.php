<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.registration');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()
            ->route('home')
            ->with('success', 'Вы успешно зарегистрировались');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()
                ->route('home')
                ->with('login', 'Вы успешно вошли в аккаунт');
        }

        return back()
            ->withErrors(['email' => 'Неверная почта или пароль'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home')->with('logout', 'Вы вышли из аккаунта');
    }
}
