<?php

namespace App\Services\Auth;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class LoginService
{
    public function store(array $data, Session $session): RedirectResponse
    {


        if (Auth::attempt($data)) {

            $session->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect()->route('login.show')->withInput()->
        withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}
