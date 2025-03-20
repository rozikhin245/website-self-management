<div class="flex flex-wrap sm:flex-nowrap h-auto w-full space-x-0 sm:space-x-2 p-4">
    <!-- Bagian Kiri -->
    <div class="bg-white shadow-md rounded-lg p-4 w-full sm:w-9/12 h-auto relative">
        <!-- Bagian Header (Judul & Tombol) -->
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-semibold text-gray-900">{{ $target->nama_target ?? 'Belum Ada Target' }}</h1>
            @if ($target)
    <!-- Tombol Hapus Target -->
    <form action="{{ route('target.destroy', $target->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus target ini?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="px-4 py-2 text-red-700">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 6h12M9 6v12m6-12v12m-9 0h12M5 6h14l-1 12a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1L5 6Z" />
            </svg>
        </button>
    </form>
@else
    <!-- Tombol Tambah Target -->
    <button class="px-4 py-2 text-gray-700" data-modal-target="target-modal" data-modal-toggle="target-modal">
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
        </svg>
    </button>
@endif


        </div>
        <!-- Progress Bar -->
        <div class="w-full h-5 bg-gray-200 rounded-full overflow-hidden mt-4">
            <div class="h-5 bg-blue-600 rounded-full dark:bg-blue-500 transition-all duration-500 text-center text-white text-sm"
                style="width: {{ $progres }}%;;"> {{ $progres }}%
            </div>
        </div>
        <!-- Keterangan Progress -->
        <h1 class="text-sm text-gray-800 font-medium mt-2 text-center sm:text-left">
            Terkumpul <span
                class="font-bold text-green-700">Rp.{{ number_format($found_amound, 0, ',', '.') }}</span> dari <span
                class="font-bold text-red-700">Rp.{{ number_format($targetTabungan, 0, ',', '.') }}</span>
        </h1>
    </div>

    <!-- Bagian Kanan -->
    <div class="w-full sm:w-3/12 h-auto flex flex-col sm:justify-between space-y-2 mt-4 sm:mt-0">
        @include('finance.control-finance')
    </div>


    <!-- Main modal -->
    <div id="target-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Create New Product
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="target-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="{{ route('target.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 ">nominal</label>
                            <input type="number" name="nominal" id="nominal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="$2999" required="">
                        </div>

                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new product
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
