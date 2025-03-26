<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">To-Do List</h2>

        <!-- Form Tambah Tugas -->
        <form action="{{ route('todolist.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="title" placeholder="Judul Tugas" class="p-2 border rounded w-full" required>
                <input type="date" name="date" class="p-2 border rounded w-full" required>
                <input type="hidden" name="category" value="null">
                <input type="hidden" name="description" value="null">
                <input type="hidden" name="status" value="pending">
                <input type="hidden" name="priority" value="normal">

            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2 w-full hover:bg-blue-600">Tambah
                Tugas</button>
        </form>
        <div class="space-y-4">
            @if ($tasks->isEmpty())
                <div
                    class="flex flex-col items-center justify-center text-center p-6 bg-white rounded-lg shadow border">
                    <svg class="w-16 h-16 text-gray-400 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 13h6m2 0a9 9 0 11-6-8.71" />
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-700">Tidak ada tugas</h3>
                    <p class="text-sm text-gray-500">Tambahkan tugas baru untuk memulai.</p>
                </div>
            @else
                @foreach ($tasks as $task)
                    <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between border">
                        <!-- Checkbox -->
                        <form action="{{ route('todolist.update', $task->id) }}" method="POST"
                            class="flex items-center">
                            @csrf
                            @method('PATCH')
                            <input type="checkbox" name="status" value="completed" onchange="this.form.submit()"
                                {{ $task->status === 'completed' ? 'checked' : '' }}
                                class="w-5 h-5 text-green-500 bg-gray-100 border-gray-300 rounded-md focus:ring-green-500 cursor-pointer">
                        </form>

                        <!-- Title & Priority -->
                        <div class="flex-1 mx-4">
                            <h3 class="text-lg font-semibold font-sans capitalize">{{ $task->title }}</h3>
                            <span class="text-gray-500 text-xs italic">{{ $task->date }}</span>
                        </div>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('todolist.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 text-sm font-semibold text-black rounded-lg  hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </button>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-app-layout>
