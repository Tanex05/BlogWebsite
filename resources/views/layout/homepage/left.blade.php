<x-navigation.sidebar-navigation route="{{ route('home') }}" icon="bi bi-house" name="Home" />
<x-navigation.sidebar-navigation route="#" icon="bi bi-bell" name="Notifications" />
<x-navigation.sidebar-navigation route="#" icon="bi bi-chat-dots" name="Messages" />
<x-navigation.sidebar-navigation route="{{ route('profile') }}" icon="bi bi-person-circle" name="Profile" />
<x-navigation.sidebar-navigation route="#" icon="bi bi-box-arrow-left" name="Logout" />


<label for="post-modal" class="btn w-full bg-blue-500 hover:bg-blue-600 text-white mt-4 rounded-full cursor-pointer">POST</label>
<!-- Modal (hidden by default) -->
<x-post.blog-post-form />
