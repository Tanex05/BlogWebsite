<x-layout>
    <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 my-10 p-5">
        <div class="flex-1 flex flex-col items-center justify-center">
            <h1 class="text-5xl font-bold mb-10">DefinitelyNotTwitter</h1>
            <p class="text-base leading-relaxed text-center">
                At Definitely Not Twitter, we're redefining social media with a fresh perspective. Our platform is designed to foster genuine conversations and meaningful connections without the noise and distractions of traditional social networks. Whether you're here to share your thoughts, engage with like-minded individuals, or just stay informed, we provide a streamlined and intuitive experience that puts you in control. Dive in and discover a new way to connect, engage, and express yourself in a space that prioritizes your voice and your values.
            </p>
        </div>
        <div class="flex-1 flex items-center justify-center ">
            <form action="" class="w-full max-w-lg">
                <div class="mb-4">
                    <label  class="block text-lg font-medium text-gray-700 text-left">
                        Username
                    </label>
                    <input type="text" placeholder="Username" class="mt-2 p-2 border border-gray-300 rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label  class="block text-lg font-medium text-gray-700 text-left">
                        Email
                    </label>
                    <input type="text" placeholder="Email" class="mt-2 p-2 border border-gray-300 rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label  class="block text-lg font-medium text-gray-700 text-left">
                        Password
                    </label>
                    <input type="password" placeholder="Password" class="mt-2 p-2 border border-gray-300 rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label  class="block text-lg font-medium text-gray-700 text-left">
                        Confirm Password
                    </label>
                    <input type="password" placeholder="Confirm Password" class="mt-2 p-2 border border-gray-300 rounded-md w-full">
                </div>
                <button class="bg-green-500 text-white p-2 rounded w-full">Sign Up</button>
            </form>
        </div>

    </div>
</x-layout>
