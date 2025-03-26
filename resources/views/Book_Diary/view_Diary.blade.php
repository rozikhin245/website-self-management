@extends('Book_Diary.index')

@section('content')
    <div class="flex flex-col w-full sm:w-[60vw] h-auto p-4 space-y-2">
        <form action="{{ route('bookDiary.index') }}" method="GET">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Search" required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>

        @if ($diaries->isEmpty())
            <!-- Pesan jika tidak ada diary -->
            <div class="flex flex-col w-full h-full bg-white rounded-lg p-4 shadow-md border border-gray-300 text-center">
                <p class="text-gray-600 text-lg">Belum ada diary yang ditambahkan.</p>
                <p class="text-gray-500 text-sm">Mulailah mencatat hari-harimu sekarang! <span><a
                            href="{{ route('bookDiary.create') }}" class="text-blue-500">, buat diary sekarang</a></span>
                </p>
            </div>
        @else
            @foreach ($diaries as $diary)
                <!-- Card -->
                <div class="flex flex-col w-full h-full bg-white rounded-lg p-4 shadow-md border border-gray-300">
                    <!-- Header -->
                    <div class="flex w-full justify-between items-center border-b border-gray-300 pb-2">
                        <h1 class="text-lg font-semibold text-gray-900">
                            {{ Str::limit($diary->title, 25, '...') }} <span class="text-gray-500">|
                                {{ $diary->mood }}</span>
                        </h1>
                        <div class="flex space-x-3 items-center">
                            <p class="text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($diary->created_at)->format('d M Y') }}
                            </p>
                            <span>|</span>
                            <form action="{{ route('bookDiary.destroy', $diary->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    class="item-center font-medium text-red-600 dark:text-red-500 hover:underline">
                                    <svg class="w-5 h-5 text-gray-500 hover:text-red-700 transition-colors duration-300 ease-in-out transform hover:scale-110"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Isi Diary -->
                    <p class="w-full text-gray-800 bg-gray-200 p-3 mt-3 rounded-md overflow-hidden">
                        {{ Str::limit($diary->diary, 100, '...') }} {{-- Batasi teks maksimal 100 karakter --}}
                    </p>
                    <div class="flex items-center space-x-2">
                        <form action="{{ route('favorite.toggle', $diary->id) }}" method="POST"
                            class="inline favorite-form mt-3">
                            @csrf
                            <button type="button" onclick="toggleFavorite({{ $diary->id }}, this)"
                                class="favorite-btn text-gray-500 hover:text-red-600 transition-all duration-300 ease-in-out items-center justify-center 
                                {{ in_array($diary->id, $likedDiaries) ? 'text-red-600' : 'text-gray-500' }}">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                </svg>
                            </button>
                        </form>

                        <div onclick="openModal({{ $diary->id }}, '{{ $diary->title }}', '{{ $diary->mood }}', `{{ $diary->diary }}`, '{{ \Carbon\Carbon::parse($diary->created_at)->format('d M Y') }}')"
                            class="mt-3 text-gray-700 hover:scale-y-105 hover:text-blue-500 transition-all duration-200 underline hover:no-underline cursor-pointer">
                            Show More
                        </div>
                    </div>
                    <!-- Tombol Show More -->
                </div>
            @endforeach
        @endif
    </div>
    <!-- Modal -->
    <div id="diaryModal"
        class="hidden fixed inset-0 bg-black bg-opacity-85 flex items-center justify-center z-[1002220] p-64">
        <div class="flex flex-col w-[50vw] bg-white rounded-lg p-4 shadow-md border border-gray-300">
            <!-- Header -->
            <div class="flex w-full justify-between items-center border-b border-gray-300 pb-2">
                <div class="flex flex-col space-x-1">
                    <h1 id="modalTitle" class="text-lg font-semibold text-gray-900"></h1>
                    <p id="modalMood" class="text-gray-500"></p>
                </div>
                <div class="flex items-center space-x-2">
                    <p onclick="closeModal()" class="cursor-pointer mb-10">❌</p>

                </div>
            </div>
            <!-- Isi Diary -->
            <p id="modalDiary" class="w-full text-gray-800 bg-gray-200 p-3 mt-3 rounded-md"></p>
            <!-- Tombol Close -->
            <div class="mt-3  py-2 text-white rounded text-center cursor-pointer justify-start ">
                <p id="modalDate" class="text-sm text-gray-500 text-start"></p>

            </div>
        </div>
    </div>

    <script>
        function openModal(id, title, mood, diary, date) {
            document.getElementById("modalTitle").innerText = title;
            document.getElementById("modalMood").innerText = "Mood: " + mood;
            document.getElementById("modalDiary").innerText = diary;
            document.getElementById("modalDate").innerText = date;

            // Tampilkan modal
            document.getElementById("diaryModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("diaryModal").classList.add("hidden");
        }
    </script>
    <script>
        function toggleFavorite(diaryId, button) {
            fetch(`/favorite/${diaryId}`, {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "added") {
                        button.classList.remove("text-gray-500");
                        button.classList.add("text-red-600");
                    } else {
                        button.classList.remove("text-red-600");
                        button.classList.add("text-gray-500");
                    }
                })
                .catch(error => console.error("Error:", error));
        }
    </script>




@endsection
