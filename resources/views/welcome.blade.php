@extends('layouts.app')



@section('content')
    <main class="app-main">
        @auth
            <h2 class="w-1/2 py-4 mx-auto text-2xl font-extrabold text-gray-900">
                Home
            </h2>
            <div class="w-1/2 mx-auto">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="px-4 py-2 text-sm font-medium text-white bg-indigo-500 rounded-md">
                        Logout
                    </button>
                    <a href="{{ route('users.profile', ['profile' => Auth::user()->profile]) }}"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md">
                        My profile
                    </a>
                </form>
            </div>
        @endauth
    </main>
@endsection
