<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen mt-[65px] pt-5 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 shadow-lg">
    <div class="h-full px-4 pb-6 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-200 transition duration-300">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-gray-800 transition duration-300" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"/>
                        <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"/>
                    </svg>
                    <span class="flex-1 ms-4 text-gray-700">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('finance.index') }}" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-200 transition duration-300">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-gray-800 transition duration-300" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 14a3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4a3 3 0 0 1-3-3Zm3-1a1 1 0 1 0 0 2h4v-2h-4Z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M12.293 3.293a1 1 0 0 1 1.414 0L16.414 6h-2.828l-1.293-1.293a1 1 0 0 1 0-1.414ZM12.414 6 9.707 3.293a1 1 0 0 0-1.414 0L5.586 6h6.828ZM4.586 7l-.056.055A2 2 0 0 0 3 9v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2h-4a5 5 0 0 1 0-10h4a2 2 0 0 0-1.53-1.945L17.414 7H4.586Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-4 text-gray-700">Keuangan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bookDiary.index') }}" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-200 transition duration-300">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-gray-800 transition duration-300" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-4 text-gray-700">Book Diary</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-200 transition duration-300">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-gray-800 transition duration-300" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-4 text-gray-700">To-Do List</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
