<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;


class LoginService
{
    public function store($request)
    {
        $credentials = $request->validated();


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect()->route('login.show')->withInput()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}
