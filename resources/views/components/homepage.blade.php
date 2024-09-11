<x-layout>
    <div class="flex flex-col md:flex-row items-stretch space-y-10 md:space-y-0 md:space-x-5 m-20">
        {{-- Sidebar Navigation --}}
        <div id="sidebar" class="w-1/5 h-full text-white bg-white rounded-lg shadow-md p-6 overflow-auto sticky top-20">
            <x-sidebar-navigation route="{{ route('home') }}" icon="bi bi-house" name="Home" />
            <x-sidebar-navigation route="#" icon="bi bi-bell" name="Notifications" />
            <x-sidebar-navigation route="#" icon="bi bi-chat-dots" name="Messages" />
            <x-sidebar-navigation route="{{ route('profile') }}" icon="bi bi-person-circle" name="Profile" />
            <x-sidebar-navigation route="#" icon="bi bi-box-arrow-left" name="Logout" />
            <label for="post-modal" class="btn w-full bg-blue-500 hover:bg-blue-600 text-white mt-4 rounded-full cursor-pointer">POST</label>
        </div>

        <!-- Modal (hidden by default) -->
        <x-blog-form />

        {{-- Content --}}
        <div class="w-3/5 text-white">
            {{ $slot }}
        </div>

        {{-- Friends --}}
        <div id="friends" class="w-1/5 h-full text-white bg-white rounded-lg shadow-md p-6 overflow-auto sticky top-20">
            <div class="relative">
                <input type="text" name="Search" placeholder="Search" class="input input-bordered w-full pr-10 rounded-full" required />
                <i class="bi bi-search text-black absolute right-3 top-1/2 transform -translate-y-1/2"></i>
            </div>
        </div>
    </div>
</x-layout>


