@extends('layouts.base')
@section('styles')
    <link rel="stylesheet" href="#">
@endsection
@section('body')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-white sm:px-6 lg:px-8 flex flex-col justify-center">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
