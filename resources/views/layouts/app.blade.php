@extends('layouts.base')

@section('body')
    <div class="app" id="app">
        <section class="app-top-bar border-2 border-b-gray-300">
            <section class="wrapper py-4 w-11/12 mx-auto flex flex-row justify-between items-center">
                <div class="app-logo">
                    Welcome Center
                </div>
                <nav class="app-nav flex flex-row space-x-4 items-center">
                    <div class="item">
                        <a href="">Dashbord</a>
                    </div>
                    <div class="item">
                        <a href="">Trainees</a>
                    </div>
                    <div class="item">
                        <a href="">Trainings</a>
                    </div>
                    <div class="item">
                        <a href="">Funds</a>
                    </div>
                </nav>
                @auth
                    <nav class="app-right-nav flex flex-row items-center space-x-3">
                        <div class="item cursor-pointer">
                            notifications
                        </div>
                        <div class="item cursor-pointer user">
                            <div class="user-avatar w-8 h-8 rounded-full bg-gray-300">

                            </div>
                        </div>
                    </nav>
                @endauth
                @guest
                    <div class="app-auth-buttons">
                        <a class="bg-green-400 font-medium text-sm rounded-md px-4 py-2 text-white" href="{{ route('login') }}">
                            I'm a member
                        </a>
                    </div>
                @endguest
            </section>
        </section>
            @yield('content')
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
