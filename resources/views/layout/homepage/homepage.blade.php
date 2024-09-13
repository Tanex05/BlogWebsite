@extends('layout.app')

@section('title', 'Discover - DefinitelyNotTwitter')

@section('content')
    <div class="flex flex-col md:flex-row items-stretch space-y-10 md:space-y-0 md:space-x-5 m-20">
        {{-- Sidebar Navigation --}}
        <div id="sidebar" class="w-1/5 h-full text-white bg-white rounded-lg shadow-md p-6 overflow-auto sticky top-20">
            @include('layout.homepage.left')
        </div>



        {{-- Content --}}
        <div class="w-3/5 text-white">
            @yield('blog-posts')
        </div>

        {{-- Friends --}}
        <div id="friends" class="w-1/5 h-full text-white bg-white rounded-lg shadow-md p-6 overflow-auto sticky top-20">
            @include('layout.homepage.right')
        </div>
    </div>
@endsection


