<!-- Navbar -->
<div class="navbar bg-blue-500 p-4">
    <!-- Left side: Title -->
    <div class="flex-1">
        <a class="text-xl font-bold text-white ml-5">DefinitelyNotTwitter</a>
    </div>

    <!-- Right side: Input fields and Login button -->
    <div class="flex-none">
        <form action="POST" class="flex items-center space-x-4">
            @csrf
            <!-- Username Input -->
            <input type="text" placeholder="Username"
                class="input input-bordered w-40 p-2 text-gray-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200" />

            <!-- Password Input -->
            <input type="password" placeholder="Password"
                class="input input-bordered w-40 p-2 text-gray-800 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200" />

            <!-- Login Button -->
            <button type="submit"
                class="btn btn-primary bg-white text-blue-500 hover:bg-blue-600 hover:text-white border-none px-4 py-2 rounded-lg shadow-md transition duration-200">
                Login
            </button>
        </form>
    </div>
</div>
