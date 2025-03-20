@extends('Book_Diary.index')

@section('content')
<div class="flex flex-col w-full sm:w-[60vw] h-auto p-4 space-y-2">
     <h1 class="text-xl font-semibold mb-4">Diary yang Disukai</h1>

    @if ($favorites->isEmpty())
        <p class="text-gray-500">Kamu belum menyukai diary apa pun.</p>
    @else
        <div class="flex flex-col w-full sm:w-[60vw] h-auto p-4 space-y-2">
            @foreach ($favorites as $favorite)
            {{-- <div class="bg-white p-4 shadow-md rounded-md flex flex-col space-y-2 border">
                <!-- Bagian atas: Judul, Tanggal, dan Hapus -->
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-bold">{{ $favorite->diary->title }} | {{ $favorite->diary->category }}</h2>
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-500 text-sm">{{ $favorite->diary->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            
                <!-- Garis pemisah -->
                <hr class="border-gray-300">
            
                <!-- Konten Diary -->
                <div class="bg-gray-100 p-3 rounded-md">
                    <p class="text-gray-700">{{ Str::limit($favorite->diary->diary, 100, '...') }}</p>
                </div>
            
                <!-- Tombol Suka dan Show More -->
                <div class="flex items-center space-x-2">
                    <button class="text-red-600 text-lg">
                        ❤️
                    </button>
                    <a href="{{ route('bookDiary.index') }}" class="text-blue-500 hover:underline">Show More</a>
                </div>
            </div> --}}


            <div class="flex flex-col w-full h-full bg-white rounded-lg p-4 shadow-md border border-gray-300">
                <!-- Header -->
                <div class="flex w-full justify-between items-center border-b border-gray-300 pb-2">
                    <h1 class="text-lg font-semibold text-gray-900">
                        {{ $favorite->diary->title}} <span class="text-gray-500">|
                            {{$favorite->diary->mood }}</span>
                    </h1>
                    {{-- <div class="flex space-x-3 items-center"> --}}
                        <p class="text-sm text-gray-500">
                            {{ \Carbon\Carbon::parse($favorite->diary->created_at)->format('d M Y') }}
                        </p>
                        {{-- <span>|</span>
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
                        </form> --}}
                    {{-- </div> --}}
                </div>
                <!-- Isi Diary -->
                <p class="w-full text-gray-800 bg-gray-200 p-3 mt-3 rounded-md overflow-hidden">
                    {{ $favorite->diary->diary }} {{-- Batasi teks maksimal 100 karakter --}}
                </p>
                <div class="flex items-center space-x-2">
                    {{-- <form action="{{ route('favorite.toggle', $diary->id) }}" method="POST" class="inline favorite-form mt-3">
                        @csrf
                        <button type="button" onclick="toggleFavorite({{ $diary->id }}, this)"
                            class="favorite-btn text-gray-500 hover:text-red-600 transition-all duration-300 ease-in-out items-center justify-center 
                            {{ in_array($diary->id, $likedDiaries) ? 'text-red-600' : 'text-gray-500' }}">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                            </svg>
                        </button>
                    </form> --}}
                    
                    {{-- <div onclick="openModal({{ $diary->id }}, '{{ $diary->title }}', '{{ $diary->mood }}', `{{ $diary->diary }}`, '{{ \Carbon\Carbon::parse($diary->created_at)->format('d M Y') }}')"
                        class="mt-3 text-gray-700 hover:scale-y-105 hover:text-blue-900 transition-all duration-200 underline hover:no-underline">
                        Show More
                    </div> --}}
                </div>
                <!-- Tombol Show More -->

            </div>
            
            @endforeach
        </div>
    @endif
</div>
@endsection