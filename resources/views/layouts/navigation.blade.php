<nav class="fixed top-0 z-40 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="https://flowbite.com" class=" ms-2 md:me-24 hidden sm:flex">
                    <img src="img/logo.png" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Trekka </span>
                </a>
            </div>
            <div class="relative flex items-center">
                <!-- Button Avatar & Nama -->
                <div
                    class="flex items-center space-x-3 bg-white border border-gray-300 py-2 px-4 rounded-lg shadow-md hover:shadow-lg transition-all">
                    <button type="button"
                        class="flex items-center text-sm rounded-full focus:ring-4 focus:ring-gray-300 transition-all"
                        aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <img class="w-10 h-10 rounded-full border border-gray-400 hover:scale-105 transition-all"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>

                    <!-- Username -->
                    <div class="max-w-[150px] cursor-pointer select-none" aria-expanded="false"
                        data-dropdown-toggle="dropdown-user">
                        <p class="text-sm font-semibold text-gray-900 truncate" role="none">
                            {{ Str::limit(Auth::user()->name, 18, '...') }}
                        </p>
                    </div>
                </div>

                <!-- Dropdown Menu -->
                <div class="absolute right-0 mt-3 hidden w-56 bg-white border border-gray-200 rounded-xl shadow-lg transition-all z-50"
                    id="dropdown-user">
                    <div class="px-4 py-3">
                        <p class="text-sm font-semibold text-gray-900 truncate">
                            {{ Str::limit(Auth::user()->name, 22, '...') }}
                        </p>
                        <p class="text-xs text-gray-500 truncate">
                            {{ Str::limit(Auth::user()->email, 25, '...') }}
                        </p>
                    </div>
                    <ul class="py-1">
                        <li>
                            <a href="{{ route('profile.edit')}}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg transition-all">
                                Profile
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-100 rounded-lg transition-all">
                                    Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</nav>
