<x-layout>
    <div class="flex flex-col md:flex-row items-stretch space-y-10 md:space-y-0 md:space-x-5 m-20">
        {{-- Sidebar Navigation --}}
        <div id="sidebar" class="w-1/5 h-full text-white bg-white rounded-lg shadow-md p-6 overflow-auto sticky top-20">
            <x-sidebar-navigation route="#" icon="bi bi-house" name="Home" />
            <x-sidebar-navigation route="#" icon="bi bi-bell" name="Notifications" />
            <x-sidebar-navigation route="#" icon="bi bi-chat-dots" name="Messages" />
            <x-sidebar-navigation route="#" icon="bi bi-person-circle" name="Profile" />
            <x-sidebar-navigation route="#" icon="bi bi-box-arrow-left" name="Logout" />
            <label for="post-modal" class="btn w-full bg-blue-500 hover:bg-blue-600 text-white mt-4 rounded-full cursor-pointer">POST</label>
        </div>

        <!-- Modal (hidden by default) -->
<input type="checkbox" id="post-modal" class="modal-toggle" />
<div class="modal">
    <div class="modal-box">
        <div class="flex justify-between items-center">
            <!-- Modal Header -->
            <h2 class="font-bold text-lg flex-grow">Create a Post</h2>

            <!-- Close button (X icon) -->
            <label for="post-modal" class="btn btn-sm btn-circle">✕</label>
        </div>
        <!-- Modal Form -->
        <form>
            <div class="form-control mb-4">
                <label for="header" class="label">
                    <span class="label-text">Title</span>
                </label>
                <input type="text" id="title" placeholder="Enter the post title" class="input input-bordered w-full" required />
            </div>

            <div class="form-control mb-4">
                <label for="content" class="label">
                    <span class="label-text">Content</span>
                </label>
                <textarea id="content" placeholder="Enter the main content" class="textarea textarea-bordered w-full resize-none" rows="5" required></textarea>
            </div>

            <div class="form-control mb-4">
                <label for="image" class="label">
                    <span class="label-text">Upload Image</span>
                </label>
                <input type="file" id="image" class="file-input file-input-bordered w-full" accept="image/*" />
            </div>

            <!-- Submit Button -->
            <div class="modal-action">
                <button type="submit" class="btn bg-blue-500 hover:bg-blue-600 text-white mt-4">Submit</button>
            </div>
        </form>
    </div>
</div>

        {{-- Content --}}
        <div class="w-3/5 text-white">
            <x-blog-post />
            <x-blog-post />
            <x-blog-post />
            <x-blog-post />
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


