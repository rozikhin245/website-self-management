<x-slot name="breadcrumb">
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
                    <a href="{{ route('finance.index') }}"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600">Finance</a>
                </div>
            </li>
        </ol>
    </nav>
</x-slot>