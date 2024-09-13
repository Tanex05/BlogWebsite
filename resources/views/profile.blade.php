@extends('layout.app')

@section('title', 'Profile')

@section('content')
    <div class="flex flex-col w-full bg-white p-6 rounded-lg shadow-md text-black mb-4">
        <div class="relative w-full h-80 overflow-hidden rounded-lg">
            <!-- Background image -->
            <img class="w-full h-full rounded-lg object-cover z-0" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Cover Image">

            <!-- Profile Picture with higher z-index -->
            <img class="w-40 h-40 rounded absolute bottom-[-50px] left-[50px] border-4 border-white z-10" src="https://via.placeholder.com/100" alt="Profile Picture">
        </div>

        <!-- Profile Info Section -->
        <div class="flex flex-col items-center mt-12">
            <!-- Name -->
            <h1 class="text-2xl font-bold mb-1">John Doe</h1>

            <!-- Description -->
            <p class="text-gray-600 mb-4 text-center">Web Developer, Tech Enthusiast, and Coffee Lover. Passionate about building great user experiences.</p>

            <!-- Edit Profile Button -->
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold py-2 px-4 rounded transition duration-300">
                Edit Profile
            </a>
        </div>
    </div>
@endsection
