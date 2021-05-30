@extends('layouts.base')

@section('body')
    <div class="app" id="app">
        <livewire:layouts.partials.header>
            <section class="app-hero">
                <div class="wrapper">
                    @yield('app-hero-breadcrumbs')
                    <h2 class="app-hero-title">
                        @yield('app-hero-title')
                    </h2>
                    <div class="app-hero-body">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="px-4 py-2 text-sm font-medium text-white bg-indigo-500 rounded-md">
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
