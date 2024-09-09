<x-layout>

    <div class="flex flex-col md:flex-row space-y-10 md:space-y-0 md:space-x-5 py-10 px-5">
        {{-- Sidebar Navigation --}}
        <div class="w-1/5 text-white p-6 ">
            <x-sidebar-navigation route="#" icon="https://img.icons8.com/?size=100&id=73&format=png&color=000000" name="Home" />
            <x-sidebar-navigation route="#" icon="https://img.icons8.com/?size=100&id=11642&format=png&color=000000" name="Notifications" />
            <x-sidebar-navigation route="#" icon="https://img.icons8.com/?size=100&id=118377&format=png&color=000000" name="Messages" />
            <x-sidebar-navigation route="#" icon="https://img.icons8.com/?size=100&id=fUUEbUbXhzOA&format=png&color=000000" name="Profile" />
            <button class="bg-black text-white font-bold py-2 px-4 rounded-full w-full hover:bg-gray-800 transition">POST</button>
        </div>

        {{-- Content --}}
        <div class="w-3/5 bg-green-500 text-white p-6">
            <div class="flex flex-col w-full bg-white p-4 rounded-lg shadow-md space-y-3 mb-4">
              <div class="flex">
                <img src="https://img.icons8.com/?size=100&id=fUUEbUbXhzOA&format=png&color=000000" class="w-10 h-10 rounded-full">
                <div class="flex-1">
                  <textarea class="ml-2 w-full text-black resize-none border border-black rounded-lg p-3 focus:ring-2 focus:ring-black" placeholder="What's happening?"></textarea>
                  <div class="flex items-center justify-between m-0">
                    <input type="file" class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-black file:text-white
                        hover:file:bg-gray-800
                        "/>
                    <button class="bg-black text-white py-2 px-6 rounded-full shadow-md hover:bg-gray-800 transition">POST</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex flex-col w-full bg-white p-4 rounded-lg shadow-md space-y-3 mb-4">

            </div>
        </div>





        {{-- friends --}}
        <div class="w-1/5 bg-red-500 text-white p-6">Box 3</div>
    </div>

</x-layout>
