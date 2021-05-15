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
                    <nav class="app-right-nav ">
                        <div class="item cursor-pointer">
                            <span class="icon">
                                <i class="far fa-bell"></i>
                                <span class="count">
                                    12
                                </span>
                            </span>
                        </div>
                        <div class="item user-nav">
                            <div class="user-avatar w-8 h-8 rounded-full bg-gray-300">

                            </div>
                            <div class="menu">
                                <div class="item">
                                    <a href="">My profile</a>
                                    <span class="icon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <div class="item">
                                    <a href="">
                                        Edit profile
                                    </a>
                                    <span class="icon">
                                        <i class="fas fa-user-cog"></i>
                                    </span>
                                </div>
                               @if(Auth::user()->hasRole('admin'))
                                    <div class="item">
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        <span class="icon">
                                            <i class="fas fa-tachometer-alt"></i>
                                        </span>
                                    </div>
                                @endif
                                <div class="item logout-btn">
                                    <span class="text">
                                        Log Out
                                    </span>
                                    <span class="icon">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="item toggle-menu">
                            <span class="icon">
                                <i class="fas fa-bars"></i>
                            </span>
                            <div class="menu">

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
               @yield('app-hero-breadcrumbs')
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
        <main class="app-main-content">
            @yield('content')
        </main>
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
