<x-layout>
<!-- Main Container -->
<div class="flex flex-col md:flex-row space-y-10 md:space-y-0 md:space-x-10 p-36">

    <!-- Left Side: Header and Paragraph -->
    <div class="flex-1 flex flex-col justify-center">
        <h1 class="text-5xl font-bold text-blue-600 mb-6">DefinitelyNotTwitter</h1>
        <p class="text-lg leading-relaxed text-gray-700">
            At Definitely Not Twitter, we're redefining social media with a fresh perspective. Our platform is designed to foster genuine conversations and meaningful connections without the noise and distractions of traditional social networks. Whether you're here to share your thoughts, engage with like-minded individuals, or stay informed, we provide a streamlined and intuitive experience that puts you in control. Discover a new way to connect, engage, and express yourself in a space that prioritizes your voice and your values.
        </p>
    </div>

    <!-- Right Side: Signup Form -->
    <div class="flex-1 flex items-center justify-center">
        <form class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
            <!-- Username Field -->
            <div class="mb-4">
                <label class="block text-lg font-medium text-gray-700">Username</label>
                <input type="text" placeholder="Username" class="input input-bordered w-full p-2 mt-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" placeholder="Email" class="input input-bordered w-full p-2 mt-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label class="block text-lg font-medium text-gray-700">Password</label>
                <input type="password" placeholder="Password" class="input input-bordered w-full p-2 mt-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-4">
                <label class="block text-lg font-medium text-gray-700">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" class="input input-bordered w-full p-2 mt-2 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
            </div>

            <!-- Sign Up Button -->
            <button class="btn btn-primary w-full bg-blue-500 text-white py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-200">Sign Up</button>
        </form>
    </div>

</div>
</x-layout>
