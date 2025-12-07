@extends('layouts.app')

@section('title','r2m')


@section('content')
    <div class="flex gap-1.5 text-white">
        <div class="container mx-auto flex items-center justify-between p-2">

            @auth
                <div class="flex gap-2">
                    <p>Welcome, authenticated user!</p>
                    <x-button route="dashboard" text="Dashboard"/>
                    <x-button route="login.show" text="Logout"/>
                </div>

            @endauth

            @guest
                <div class="flex gap-2">
                    <x-button route="login.show" text="Sign in"/>
                    <x-button route="register.show" text="Register"/>
                </div>

                <p>Please log in or register.</p>
            @endguest
        </div>
    </div>

@endsection
