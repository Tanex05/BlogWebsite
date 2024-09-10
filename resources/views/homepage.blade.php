<x-layout>

    <div class="flex flex-col md:flex-row space-y-10 md:space-y-0 md:space-x-5 m-20">
        {{-- Sidebar Navigation --}}
        <div class="w-1/5 h-full text-white bg-white rounded-lg shadow-md p-6 overflow-auto">
            <x-sidebar-navigation route="#" icon="bi bi-house" name="Home" />
            <x-sidebar-navigation route="#" icon="bi bi-bell" name="Notifications" />
            <x-sidebar-navigation route="#" icon="bi bi-chat-dots" name="Messages" />
            <x-sidebar-navigation route="#" icon="bi bi-person-circle" name="Profile" />
            <button class="btn w-full bg-blue-500 hover:bg-blue-600 text-white mt-4 rounded-full">POST</button>
        </div>


        {{-- Content --}}
        <div class="w-3/5 bg-green-500 text-white p-2">
            <div class="flex flex-col w-full bg-white p-4 rounded-lg shadow-md space-y-3 mb-4 text-black">
                <div class="flex items-start space-x-4">
                    <img src="https://img.icons8.com/?size=100&id=fUUEbUbXhzOA&format=png&color=000000" class="w-10 h-10 rounded-full" alt="Icon">
                    <div class="flex-1">
                        <figure class="w-full h-64 overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title text-black">
                                Shoes!
                                <div class="badge badge-secondary">NEW</div>
                            </h2>
                            <p class="text-black">If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">Fashion</div>
                                <div class="badge badge-outline">Products</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- friends --}}
        <div class="w-1/5 bg-red-500 text-white p-6">Box 3</div>
    </div>

</x-layout>
