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
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full space-x-1 hover:text-blue-600 md:me-0 focus:ring-2 focus:ring-gray-100"
                type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-10 h-10 rounded-full border border-gray-400 a transition-all"
                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                <div>
                    {{ Str::limit(Auth::user()->name, 22, '...') }}
                </div>

                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>



        </div>





        <!-- Dropdown menu -->
        <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-52">
            <div class="px-4 py-3 text-sm text-gray-900">
                <div class="font-medium ">{{ Str::limit(Auth::user()->name, 22, '...') }}</div>
                <div class="truncate">{{ Str::limit(Auth::user()->email, 25, '...') }}</div>
            </div>
            <ul class="py- text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                <li>
                    <a href="{{ route('profile.edit') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg transition-all">
                        Profile
                    </a>
                </li>
            </ul>
            <div class="py-">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-100 rounded-lg transition-all">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
