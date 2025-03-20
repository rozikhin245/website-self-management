@extends('Book_Diary.index')

@section('content')
    <form class="w-[60vw] h-full bg-gray-100 shadow-gray-300 shadow-xl p-5 rounded-xl" action="{{ route('bookDiary.store') }}"
        method="POST">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-200 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5"
                    placeholder="Judul diary..." required />
            </div>
            <div>
                <label for="mood" class="block mb-2 text-sm font-medium text-gray-900">Mood/Keadaan Diri</label>
                <input type="text" id="mood" name="mood"
                    class="bg-gray-200 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5"
                    placeholder="Mood hari ini..." required />
            </div>
            <div>
                <label for="weather" class="block mb-2 text-sm font-medium text-gray-900">Cuaca</label>
                <input type="text" id="weather" name="weather"
                    class="bg-gray-200 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5"
                    placeholder="Bagaimana cuaca hari ini?" required />
            </div>
            <div>
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Tempat</label>
                <input type="text" id="location" name="location"
                    class="bg-gray-200 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5"
                    placeholder="Dimana kamu berada?" required />
            </div>
        </div>

        <div class="flex flex-col w-full h-48">
            <label for="diary" class="block mb-2 text-sm font-medium text-gray-900">Ceritamu</label>
            <textarea id="diary" rows="5" name="diary"
                class="w-full h-full p-4 text-gray-900 text-sm bg-gray-200 rounded-lg border border-gray-400 focus:ring-gray-500 focus:border-gray-500 resize-none focus:outline-none"
                placeholder="Tulis ceritamu di sini..."></textarea>
        </div>

        <button type="submit"
            class="text-white bg-gray-700 mt-5 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-500 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">
            Simpan Diary
        </button>
    </form>
@endsection
