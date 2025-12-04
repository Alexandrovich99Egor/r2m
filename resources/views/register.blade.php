@extends('layouts.app')

@section('title','r2m Login')

@section('content')

    <div class="flex items-center justify-center h-full">
        <div
            class="flex flex-col justify-center w-full max-w-80 rounded-xl px-6 py-8 border border-slate-700 bg-slate-900 text-white text-sm max-h-8/12">

            <h2 class="text-2xl font-semibold">Register</h2>

            <p class="text-slate-300 mt-1">Register to your account</p>

            <form method="post" action="{{route('register.form')}}" class="mt-8">
                @csrf
                <label for="name" class="block mb-1 font-medium text-slate-300">Name</label>

                <input type="text" id="name" name="name" placeholder="Name"
                       class="w-full p-2 mb-3 bg-slate-900 border border-slate-700 rounded-md focus:outline-none
                   focus:ring-1 transition focus:ring-indigo-500 focus:border-indigo-500">


                <label for="email" class="block mb-1 font-medium text-slate-300">Email address</label>

                <input type="email" id="email" name="email" placeholder="Email"
                       class="w-full p-2 mb-3 bg-slate-900 border border-slate-700 rounded-md focus:outline-none
                   focus:ring-1 transition focus:ring-indigo-500 focus:border-indigo-500">


                <label for="password" class="block mb-1 font-medium text-slate-300">Password</label>

                <input type="password" id="password" name="password" placeholder="Password"
                       class="w-full p-2 mb-2 bg-slate-900 border border-slate-700 rounded-md focus:outline-none focus:ring-1 transition focus:ring-indigo-500 focus:border-indigo-500">

                <div class="text-right">

                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>

                </div>

                <button type="submit"
                        class="w-full mt-10 px-4 py-2.5 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Register
                </button>

            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
