<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    //
    public function index(): View
    {

        return view('login');
    }


    public function store(LoginRequest $request, LoginService $loginService): RedirectResponse
    {
        return $loginService->store($request);
    }
}
