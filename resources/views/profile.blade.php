@extends('layouts.app')

@section('title','r2m')


@section('content')
    <div class="container text-white">
        @if($profile)
            @foreach($profile as $p)
                {{$p->name}}
                <div>
                    <img src="{{asset('/storage/'.$p->avatar)}}" alt="">
                </div>
            @endforeach

        @endif
    </div>

@endsection
