@auth
    @extends('layouts.app')

    @section('title','r2m')

    @section('content')
        <div class="container m-auto flex flex-col text-amber-50  w-full p-5">
            @if ($errors->has('auth'))
                <div class="text-red-600 text-center">
                    {{ $errors->first('auth') }}
                </div>
            @endif
            <div class="w-full">
                <h1 class="font-bold text-3xl mb-2 text-center">Dashboard</h1>
                <div class="flex flex-col justify-between p-8">
                    <div
                        class="flex
                         justify-between bg-[linear-gradient(127.09deg,_rgba(6,11,40,0.94)_19.41%,_rgba(10,14,35,0.49)_76.65%)]
                         p-10 rounded-xl">
                        <div class="flex items-center  justify-between gap-x-20">
                            <div
                                class="w-30 h-30 rounded-4xl overflow-hidden border-2 bg-orange-100  cursor-pointer relative">
                                <label class="absolute left-0 right-0 block w-full h-full cursor-pointer"
                                       for="user-avatar-upload">
                                    <img src="{{ auth()->user()->avatar
                                    ? asset('storage/' . auth()->user()->avatar)
                                    : asset('storage/avatars/default.jpg') }}" alt="avatar">
                                </label>
                                <input type="file" id="user-avatar-upload" name="avatar" class="hidden"
                                       accept="image/*">
                            </div>
                            <div class="flex flex-col  justify-between">
                                <h2 class="font-bold text-3xl mb-2">
                                    {{auth()->user()->name}}
                                </h2>
                                <p>
                                    {{auth()->user()->email}}
                                </p>
                            </div>
                        </div>
                        <div class="mt-10">
                            <x-button route="logout" text="Logout"/>
                        </div>
                    </div>
                    <div class="flex justify-between gap-5">
                        <div class="bg-cover
                        mt-10
                        p-10
                        rounded-xl
                        bg-center"
                             style="background-image: url('{{ asset('images/dashboard/welcome-profile.309ed05e.png') }}')">
                            <p class="text-2xl font-bold mb-5">
                                Здарова, {{auth()->user()->name}} !
                            </p>
                            <p class="mb-5 text-xs">
                                Рады видеть тебя на нашем формошлеп проекте.
                            </p>
                        </div>
                        <div
                            class="rounded-xl p-10 mt-10 bg-[linear-gradient(127.09deg,_rgba(6,11,40,0.94)_19.41%,_rgba(10,14,35,0.49)_76.65%)]">
                            <p class="text-2xl font-bold mb-5">
                                Твои скилы вебмакаки
                            </p>
                            <p class="mb-5 text-xs">
                                {{auth()->user()->bio}}
                            </p>
                        </div>
                        <div
                            class="rounded-xl p-10 mt-10 bg-[linear-gradient(127.09deg,_rgba(6,11,40,0.94)_19.41%,_rgba(10,14,35,0.49)_76.65%)]">
                            <p class="text-2xl font-bold mb-5">
                                Информация о тебе
                            </p>
                            <p class="mb-5 text-xs">
                                @if($profileBio)
                                    {{$profileBio}}
                                @endif
                            </p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    @endsection

@endauth
