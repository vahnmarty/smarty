<header x-data="{ isOpen: false }" class="py-3 bg-gray-100 lg:static lg:overflow-y-visible"
    :class="isOpen ? 'fixed inset-0 z-40 overflow-y-auto' : ''">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-16">
        <div class="relative flex justify-between lg:gap-8 xl:grid xl:grid-cols-12">
            <div class="flex-1 min-w-0 md:px-8 lg:px-0 xl:col-span-6">
                <div class="flex items-center px-6 py-4 md:mx-auto md:max-w-3xl lg:mx-0 lg:max-w-none xl:px-0">
                    <div class="w-full">
                        <!-- Teams Dropdown -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="relative ml-3">
                                <x-dropdown align="left" width="60">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:bg-gray-50 focus:outline-none active:bg-gray-50">
                                                {{ Auth::user()?->currentTeam?->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <div class="w-60">
                                            <!-- Team Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Team') }}
                                            </div>

                                            <!-- Team Settings -->
                                            <x-dropdown-link
                                                href="{{ route('teams.show', Auth::user()?->currentTeam?->id) }}">
                                                {{ __('Team Settings') }}
                                            </x-dropdown-link>

                                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                <x-dropdown-link href="{{ route('teams.create') }}">
                                                    {{ __('Create New Team') }}
                                                </x-dropdown-link>
                                            @endcan

                                            <!-- Team Switcher -->
                                            @if (Auth::user()->allTeams()->count() > 1)
                                                <div class="border-t border-gray-200"></div>

                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    {{ __('Switch Teams') }}
                                                </div>

                                                @foreach (Auth::user()->allTeams() as $team)
                                                    <x-switchable-team :team="$team" />
                                                @endforeach
                                            @endif
                                        </div>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex items-center md:absolute md:inset-y-0 md:right-0 lg:hidden">
                <!-- Mobile menu button -->
                <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center justify-center p-2 -mx-2 text-gray-400 rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-500"
                    aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!--
                  Icon when menu is closed.
    
                  Heroicon name: outline/bars-3
    
                  Menu open: "hidden", Menu closed: "block"
                -->
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                  Icon when menu is open.
    
                  Heroicon name: outline/x-mark
    
                  Menu open: "block", Menu closed: "hidden"
                -->
                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-6">
                <p class="font-bold font-montserrat">
                    Free
                </p>
                <a href="#"
                    class="flex-shrink-0 p-2 ml-5 text-gray-700 bg-gray-200 rounded-sm hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">
                    <span class="sr-only">View notifications</span>
                    <x-heroicon-o-bell class="w-4 h-4 text-gray-700"/>
                </a>

                <!-- Profile dropdown -->
                <div class="relative flex-shrink-0 ml-5 rounded-md">
                    
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="flex p-1 transition duration-200 ease-in-out hover:bg-gray-300" type="button">
                                <div class="mr-3 text-right">
                                    <p class="text-xs text-gray-900">{{ Auth::user()->name }}</p>
                                    <p class="text-xs text-gray-600">{{ Auth::user()->email }}</p>
                                </div>
                                <div class="p-2 bg-gray-500 rounded-sm">
                                    <x-heroicon-o-user class="w-4 h-4 text-white"/>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <div class="py-3">
                                <div class="px-6 py-3 hover:bg-gray-100">
                                    <a href="{{ url('user/profile') }}" class="flex gap-3 text-xs">
                                        <x-heroicon-o-user-circle class="w-4 h-4"/>
                                        Profile
                                    </a>
                                </div>
                                <div class="px-6 py-3 hover:bg-gray-100">
                                    <a href="#" class="flex gap-3 text-xs" onclick="document.querySelector('#form_logout').submit()">
                                        <x-heroicon-o-logout class="w-4 h-4"/>
                                        Log out
                                    </a>
                                        <form action="{{ route('logout') }}" method="POST" id="form_logout" class="hidden">
                                            @csrf
                                        </form>
                                </div>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>

                
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <nav x-cloak x-show="isOpen" class="lg:hidden" aria-label="Global">
        <div class="max-w-3xl px-2 pt-2 pb-3 mx-auto space-y-1 sm:px-4">
            <!-- Current: "bg-gray-100 text-gray-900", Default: "hover:bg-gray-50" -->
            <a href="#" aria-current="page"
                class="block px-3 py-2 text-base font-medium text-gray-900 bg-gray-100 rounded-md">Home</a>

            <a href="#" class="block px-3 py-2 text-base font-medium rounded-md hover:bg-gray-50">Popular</a>

            <a href="#"
                class="block px-3 py-2 text-base font-medium rounded-md hover:bg-gray-50">Communities</a>

            <a href="#" class="block px-3 py-2 text-base font-medium rounded-md hover:bg-gray-50">Trending</a>
        </div>
        <div class="pt-4 border-t border-gray-200">
            <div class="flex items-center max-w-3xl px-4 mx-auto sm:px-6">
                <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-full"
                        src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                    <div class="text-sm font-medium text-gray-500">chelsea.hagon@example.com</div>
                </div>
                <button type="button"
                    class="flex-shrink-0 p-1 ml-auto text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
            <div class="max-w-3xl px-2 mx-auto mt-3 space-y-1 sm:px-4">
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-500 rounded-md hover:bg-gray-50 hover:text-gray-900">Your
                    Profile</a>

                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-500 rounded-md hover:bg-gray-50 hover:text-gray-900">Settings</a>

                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-500 rounded-md hover:bg-gray-50 hover:text-gray-900">Sign
                    out</a>
            </div>
        </div>

        <div class="max-w-3xl px-4 mx-auto mt-6 sm:px-6">
            <a href="#" onclick="document.querySelector('#form_logout').submit()"
                class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-rose-600 hover:bg-rose-700">
                Log out </a>

        </div>
    </nav>
</header>
