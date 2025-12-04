@extends('layouts.app')

@section('title','r2m')


@section('content')
    <div class="flex gap-1.5 text-white">
        @auth
            <p>Welcome, authenticated user!</p>
            <button type="button"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500
                    hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300
                     dark:focus:ring-blue-800 font-medium rounded-base text-sm px-4 py-2.5
                      text-center leading-5">
                <a href="{{route('logout')}}">
                    Log out
                </a>
            </button>
        @endauth

        @guest
                <button type="button"
                        class="text-white bg-gradient-to-br from-purple-600 to-blue-500
                    hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300
                     dark:focus:ring-blue-800 font-medium rounded-base text-sm px-4 py-2.5
                      text-center leading-5">
                    <a href="{{route('login.show')}}">
                        Log in
                    </a>
                </button>
            <p>Please log in or register.</p>
        @endguest
    </div>

@endsection
