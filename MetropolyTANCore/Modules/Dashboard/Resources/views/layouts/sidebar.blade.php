<div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
    <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
        <div class="flex items-center justify-center pt-6">
            {{-- logo here svg format --}}
        </div>
        <nav class="mt-4">
            <div>
                <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500 {{request()->is('dashboard*') ? "w-full flex items-center font-thin uppercase text-blue-500 dark:from-gray-700  p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500  dark:to-gray-800 border-r-4 border-blue-500" : "w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"}}"
                   href="{{route('dashboard.index')}}">
                            <span class="text-left">
                            <x-heroicon-o-home class="h-6 w-6" />
                            </span>
                    <span class="mx-4 text-sm font-normal">
                                Dashboard
                            </span>
                </a>
                @hasanyrole(\Modules\Role\Entities\RoleVar::ADMIN . "|" . \Modules\Role\Entities\RoleVar::TELEOPERATOR)
                <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500 {{request()->is('user*') ? "w-full flex items-center font-thin uppercase text-blue-500 dark:from-gray-700  p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500  dark:to-gray-800 border-r-4 border-blue-500" : "w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"}}"
                   href="{{route('user.index')}}">
                             <span class="text-left">
                                 <x-heroicon-o-users class="h-6 w-6" />
                            </span>
                    <span class="mx-4 text-sm font-normal">
                                User
                            </span>
                </a>
                @endhasanyrole
                @role(\Modules\Role\Entities\RoleVar::ADMIN)
                <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                   href="#">
                            <span class="text-left">
                               <x-heroicon-o-cog class="h-6 w-6" />
                            </span>
                    <span class="mx-4 text-sm font-normal">
                                Settings
                            </span>
                </a>
                @endrole
            </div>
        </nav>
    </div>
</div>
