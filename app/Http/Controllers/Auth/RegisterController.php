<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\RegisterService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    //

    public function index(): View
    {
        return view('register');
    }


    public function store(RegisterRequest $request, RegisterService $registerService): RedirectResponse
    {
        $registerService->register($request->validated());


        return redirect()->route('dashboard')->with('success', 'You have been registered successfully.');
    }
}
