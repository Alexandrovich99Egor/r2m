<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LogoutService
{
    public function logout(array $data): User
    {
        Auth::logout();

        $data->session()->invalidate();

        $data->session()->regenerateToken();

        return redirect('/');
    }
}
