<x-app-layout>
    <section class="flex w-full h-[80vh] items-center justify-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl items-center text-center lg:py-16">
            {{-- <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl capitalize">
                Welcome to Livi Website
            </h1> --}}
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl capitalize">
                Welcome to Trekka  Website
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
                Take control of your life and stay organized. With clear priorities and smart planning, you can achieve more with less effort.  
                <span>
                    "Success starts with structure. Build better habits, track progress, and turn your goals into reality!"
                </span>
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <!-- Button 1 -->
                <a href="{{ route('finance.index') }}" 
                    class="group inline-flex justify-center items-center p-4 bg-white border border-gray-600 rounded-xl shadow-md transition-all duration-300 hover:bg-gray-100 hover:shadow-lg focus:ring-4 focus:ring-gray-300">
                    <svg class="w-7 h-7 text-gray-700 transition-all duration-300 group-hover:scale-110 group-hover:text-gray-900" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 14a3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4a3 3 0 0 1-3-3Zm3-1a1 1 0 1 0 0 2h4v-2h-4Z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M12.293 3.293a1 1 0 0 1 1.414 0L16.414 6h-2.828l-1.293-1.293a1 1 0 0 1 0-1.414ZM12.414 6 9.707 3.293a1 1 0 0 0-1.414 0L5.586 6h6.828ZM4.586 7l-.056.055A2 2 0 0 0 3 9v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2h-4a5 5 0 0 1 0-10h4a2 2 0 0 0-1.53-1.945L17.414 7H4.586Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            
                <!-- Button 2 -->
                <a href="{{ route('bookDiary.index') }}" 
                    class="group inline-flex justify-center items-center p-4 bg-white border border-gray-600 rounded-xl shadow-md transition-all duration-300 hover:bg-gray-100 hover:shadow-lg focus:ring-4 focus:ring-gray-300">
                    <svg class="w-7 h-7 text-gray-700 transition-all duration-300 group-hover:scale-110 group-hover:text-gray-900" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            
                <!-- Button 3 -->
                <a href="{{ route('todolist.index')}}" 
                    class="group inline-flex justify-center items-center p-4 bg-white border border-gray-600 rounded-xl shadow-md transition-all duration-300 hover:bg-gray-100 hover:shadow-lg focus:ring-4 focus:ring-gray-300">
                    <svg class="w-7 h-7 text-gray-700 transition-all duration-300 group-hover:scale-110 group-hover:text-gray-900" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            
            
            
        </div>
    </section>
</x-app-layout>
