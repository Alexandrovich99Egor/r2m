<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\LogoutService;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //


    public function store(Request $request, LogoutService $logoutService): RedirectResponse
    {
        $logoutService->logout($request->user());

        return redirect()->route('/');
    }
}
