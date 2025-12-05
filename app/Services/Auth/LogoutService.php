<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LogoutService
{
    public function logout(object $data): RedirectResponse
    {
        Auth::logout();

        $data->session()->invalidate();

        $data->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'You have been logged out.');
    }
}
