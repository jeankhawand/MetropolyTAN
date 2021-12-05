<header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
    <div class="relative p-3 flex items-center w-full space-x-4 justify-end">
        <div class="flex items-center rounded-full">
        </div>
        {{--                    notifcation dropdown --}}
        <x-dropdown class="text-gray-500">
            <x-slot name="trigger">
                <button
                    class="flex p-2 items-center rounded-full bg-white shadow text-gray-400 hover:text-gray-700 text-md">
                    <x-heroicon-o-bell class="w-6 h-6 "/>
                </button>
            </x-slot>
            <div class="absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:20rem;">
                <div class="py-2">
                    @include('dashboard::layouts.notification-item')
                </div>
{{--                <a href="#" class="block bg-gray-800 text-white text-center font-bold py-2">See all notifications</a>--}}
            </div>
        </x-dropdown>


        <span class="w-1 h-8 rounded-lg bg-gray-200">
                    </span>

        <a href="#" class="block relative">
            <img alt="profil"
                 src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.7FTrJ0AZNspwAi5Jhco06QHaHa%26pid%3DApi&f=1"
                 class="mx-auto object-cover rounded-full h-10 w-10 " />
        </a>
        <div x-data="{ dropdownOpen: false }">
        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center text-gray-500 dark:text-white text-md">
            {{auth()->user()->name}}
            <svg width="20" height="20" class="ml-2 text-gray-400" fill="currentColor"
                 viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>
{{--            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>--}}
            <div x-show="dropdownOpen" class="absolute right-0 mt-6 py-1 w-48 bg-white rounded-md shadow-xl z-20">
                <form method="POST" id="logoutForm" action="{{route('logout')}}">
                    @csrf
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white" onclick="document.getElementById('logoutForm').submit()">Sign Out</a>
                </form>
            </div>
        </div>
    </div>

</header>
