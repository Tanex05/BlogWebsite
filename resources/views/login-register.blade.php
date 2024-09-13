@extends('layout.app')

@section('title', 'Login')

@section('content')
    <div class="flex justify-between min-h-screen">

        {{-- Left --}}
        <div class="flex-1 flex justify-center items-center">
            <div class="ml-20">
                <div class="text-4xl font-bold text-blue-500 mb-2">
                    DefinitelyNotTwitter
                </div>
                <p class="text-2xl text-black mr-10">Connect with friends and the world around you on DefinitelyNotTwitter.</p>
            </div>
        </div>

        {{-- Right --}}
        <div class="bg-blue-400 flex-1 flex justify-center items-center">
            <div class="m-20 bg-white p-4 rounded-lg shadow-md w-full">
                <x-registration-login.login-form />
                <!-- Modal Trigger -->
                <p class="text-center mt-4">
                    Don't have an account?
                    <label for="register-modal" class="text-blue-500 font-bold cursor-pointer">Register</label>
                </p>
            </div>
        <div>

    </div>

    <!-- Modal (hidden by default) -->
    <input type="checkbox" id="register-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <div class="flex justify-between items-center">
                <!-- Centered heading -->
                <h2 class="font-bold text-lg text-center flex-grow">Register</h2>

                <!-- Close button (X icon) -->
                <label for="register-modal" class="btn btn-sm btn-circle">✕</label>
            </div>
            <p class="py-4 text-center">Create your account and start connecting with friends.</p>

            <!-- Registration Form -->
            <x-registration-login.registration-form />
        </div>
    </div>
@endsection
