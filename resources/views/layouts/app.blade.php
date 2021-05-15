@extends('layouts.base')

@section('body')
    <div class="app" id="app">
        <section class="app-top-bar">
            <section class="wrapper">
                <div class="app-logo">
                    Welcome Center
                </div>

                @auth
                    <nav class="app-nav">
                        <div class="item">
                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </div>
                        <div class="item">
                            <a href="{{ route('trainees.index') }}">Trainees</a>
                        </div>
                        <div class="item">
                            Sponsors
                            <div class="menu">
                                <div class="item">
                                    <a href="{{ route('sponsors.index') }}">List</a>
                                </div>
                                <div class="item">
                                    <a href="{{ route('sponsors.create') }}">Create</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            Trainings
                            <div class="menu">
                                <div class="item">
                                    <a href="{{ route('trainings.index') }}">
                                        List
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{ route('trainings.create') }}">Create</a>
                                </div>
                                <div class="item">
                                    <a href="{{ route('trainings.assign-trainees') }}">Assign trainees</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="{{ route('companies.index') }}">Companies</a>
                        </div>
                        <div class="item">
                            Funds help
                            <div class="menu">
                                <div class="item">
                                    <a href="{{ route('fundsHelp.index') }}">List</a>
                                </div>
                                <div class="item">
                                    <a href="{{ route('fundsHelp.create') }}">Create</a>
                                </div>
                                <div class="item">
                                    <a href="{{ route('fundsHelp.grant') }}">Grant fund help</a>
                                </div>
                                <div class="item">
                                    <a href="{{ route('fundsHelp.grant-list') }}">
                                        People who have obtained an aid fund
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="{{ route('fundings.index') }}">Funding</a>
                        </div>
                    </nav>
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
        <section class="app-hero">
           <div class="wrapper">
               <h2 class="app-hero-title">
                   @yield('app-hero-title')
               </h2>
               <div class="app-hero-body">
                   <form action="{{ route('logout') }}" method="post">
                       @csrf
                       <button class="bg-indigo-500 font-medium text-sm rounded-md px-4 py-2 text-white">
                           Logout
                       </button>
                   </form>
               </div>
           </div>
        </section>
            @yield('content')
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
