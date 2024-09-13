<div class="relative group">
    <a href="{{ $route }}" class="flex items-center space-x-4 p-2 w-full h-full transition-all duration-300 ease-in-out rounded-full border-2 border-transparent group-hover:bg-gray-200 group-hover:text-white">
        @if (isset($icon) && $icon)
            <i class="bi {{ $icon }} text-black text-2xl"></i> <!-- Adjusted text size for better alignment -->
        @endif
        <span class="font-bold text-black text-xl">{{ $name }}</span>
    </a>
</div>
