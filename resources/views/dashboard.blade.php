@auth
    @extends('layouts.app')

    @section('title','r2m')

    @section('content')
        <div class="container m-auto text-amber-50  w-full">

        </div>
        <div class="container m-auto flex flex-col text-amber-50  w-full ">
            <div class="w-full">
                <h1 class="font-bold text-3xl mb-2 text-center">Dashboard</h1>
                <div class="flex justify-between items-top p-8">
                    <div class="flex flex-col">
                        <div class="mb-10 flex flex-col items-center justify-between">
                            <div
                                class="w-30 h-30 rounded-full overflow-hidden border-2 bg-orange-100 mb-5 cursor-pointer relative">
                                <label class="absolute left-0 right-0 block w-full h-full cursor-pointer"
                                       for="user-avatar-upload">
                                    <img src="{{ auth()->user()->avatar
                                    ? asset('storage/' . auth()->user()->avatar)
                                    : asset('storage/avatars/default.jpg') }}" alt="avatar">
                                </label>
                                <input type="file" id="user-avatar-upload" name="avatar" class="hidden" accept="image/*">
                            </div>
                            <div class="flex flex-col  justify-between">
                                <h2>Здарова, формошлеп {{auth()->user()->name}}</h2>
                            </div>
                        </div>
                        <div class=" mt-10">
                            <button type="button"
                                    class="w-full cursor-pointer text-white bg-gradient-to-br from-purple-600 to-blue-500
                    hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300
                     dark:focus:ring-blue-800 font-medium rounded-base text-sm px-4 py-2.5
                      text-center leading-5">
                                <a href="{{route('logout')}}">
                                    Log out
                                </a>
                            </button>
                        </div>
                    </div>
                    <div>
                        <p>
                            Про него : {{auth()->user()->about}}
                        </p>
                        <p>
                            Коронован : {{auth()->user()->role}}
                        </p>
                        <p>
                            Био : {{auth()->user()->bio}}
                        </p>
                    </div>
                </div>


            </div>
        </div>
    @endsection

@endauth
