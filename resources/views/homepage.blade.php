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
        <div class="w-3/5 text-white p-2">
            <div class="flex flex-col w-full bg-white p-8 rounded-lg shadow-md space-y-3 mb-4 text-black">
                <div class="flex items-start space-x-3">
                    <img src="https://img.icons8.com/?size=100&id=fUUEbUbXhzOA&format=png&color=000000" class="w-10 h-10 rounded-full" alt="Icon">
                    <div class="flex-1 pr-4">
                        <div class="flex items-center mb-2 space-x-2">
                            <div class="font-bold">@TanexDaddy</div>
                            <div class="text-gray-500 text-sm">Created 2 hours ago</div>
                        </div>
                        <div class="w-full h-80 overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes">
                        </div>
                        <div class="mt-4 w-full">
                            <h1 class="text-3xl font-bold mb-2">SHOES</h1>
                            <p class="text-black text-start text-gray-500">
                                Step up your style game with our latest shoe collection! Whether you’re hitting the gym, the streets, or just lounging at home, we’ve got the perfect pair for every occasion. From sleek sneakers to cozy slip-ons, find your new favorite footwear and walk with confidence. 🏃‍♂️👟 #Shoes #Fashion #Style
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- friends --}}
        <div class="w-1/5 bg-red-500 text-white p-6">Box 3</div>
    </div>

</x-layout>
