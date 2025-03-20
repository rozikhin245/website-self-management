<x-app-layout>
    {{-- <x-slot name="breadcrumb">
        <nav class="flex px-5 py-3 text-gray-700  rounded-lg " aria-label="Breadcrumb ">
            <ol class="inline-flex items-center space-x-1 md:space-x-1">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L2 8h3v8h10V8h3L10 2z"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mx-1 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6.707 9.293a1 1 0 011.414 0L10 11.172l1.879-1.879a1 1 0 111.414 1.414l-2.586 2.586a1 1 0 01-1.414 0L6.707 10.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('bookDiary.index') }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600">Diary Book</a>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot> --}}
    <div class="flex h-full w-full justify-center">
        <div class="inline-flex rounded-md shadow-xs" role="group">
            <a href="{{ route('bookDiary.index') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <svg class="w-4 h-4 me-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                        clip-rule="evenodd" />
                </svg>
                Lihat Catatan
            </a>
            <a href="{{ route('bookDiary.create') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <svg class="w-4 h-4 text-gray-800 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M15.514 3.293a1 1 0 0 0-1.415 0L12.151 5.24a.93.93 0 0 1 .056.052l6.5 6.5a.97.97 0 0 1 .052.056L20.707 9.9a1 1 0 0 0 0-1.415l-5.193-5.193ZM7.004 8.27l3.892-1.46 6.293 6.293-1.46 3.893a1 1 0 0 1-.603.591l-9.494 3.355a1 1 0 0 1-.98-.18l6.452-6.453a1 1 0 0 0-1.414-1.414l-6.453 6.452a1 1 0 0 1-.18-.98l3.355-9.494a1 1 0 0 1 .591-.603Z"
                        clip-rule="evenodd" />
                </svg>
                create Diary
            </a>
            <a href="{{ route('favorite.index') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <svg class="w-4 h-4 me-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                </svg>
                Suka
            </a>
        </div>
    </div>
    <main class="flex h-full w-full p-5 justify-center">
        @yield('content')
    </main>
</x-app-layout>
