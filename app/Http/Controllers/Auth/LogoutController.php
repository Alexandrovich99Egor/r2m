<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\LogoutService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function index(Request $request, LogoutService $logoutService): RedirectResponse
    {
        return $logoutService->logout($request);
    }
}
