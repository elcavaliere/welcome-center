@extends('layouts.app')

@section('content')
        <main class="app-main">
            @auth
                <h2 class="font-extrabold text-2xl text-gray-900 mx-auto w-1/2 py-4">
                    Home
                </h2>
                <div class="w-1/2 mx-auto">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="bg-indigo-500 font-medium text-sm rounded-md px-4 py-2 text-white">
                            Logout
                        </button>
                        <a href="{{ route('users.profile',['profile' => Auth::user()->profile]) }}" class="bg-blue-500 font-medium text-sm rounded-md px-4 py-2 text-white">
                            My profile
                        </a>
                    </form>
                </div>
            @endauth
        </main>
@endsection
