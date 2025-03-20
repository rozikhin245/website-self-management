<div class="w-full h-full  p-4">
    <div class="relative overflow-x-auto shadow-lg sm:rounded-lg border-2 border-gray-200">
        <table class="w-full text-sm text-left text-white ">
            <thead class="text-xs text-gray-700 uppercase border bg-slate-100">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        judul
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        type
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        category
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Harga
                    </th>
                    <th scope="col" class="px-3 py-3 text-center">
                        date
                    </th>
                    <th scope="col" class="text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($finances as $data)
                    <tr class="bg-white border-b  border-gray-200 text-gray-700">
                        <td class="px-6 py-4 text-center font-bold">
                            {{ $data->judul }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span @class([
                                'text-xs font-medium me-2 px-3 py-1 rounded-2xl',
                                'bg-red-900 text-white' => $data->type === 'expense',
                                'bg-green-900 text-white' => $data->type === 'income',
                                'bg-gray-900 text-gray-300' => !in_array($data->type, [
                                    'expense',
                                    'income',
                                ]),
                            ])>
                                {{ ucfirst($data->type) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $data->category }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            Rp.{{ number_format($data->amount, 0, ',', '.') }}
                        </td>
                        <td class="px-3 py-3 text-center">
                            {{ $data->date }}
                        </td>
                        <td class="py-0 relative text-center">
                            <form action="{{ route('finance.destroy', $data->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    class="ml-4 font-medium text-red-600 dark:text-red-500 hover:underline">
                                    <svg class="w-5 h-5 text-gray-500 hover:text-red-700 transition-colors duration-300 ease-in-out transform hover:scale-110"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                      </svg>
                                      
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">Belum ada produk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot class="text-xs text-gray-700 uppercase bg-slate-100 font-bold">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        judul
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        type
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        category
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Harga
                    </th>
                    <th scope="col" class="px-3 py-3 text-center">
                        date
                    </th>
                    <th scope="col" class="text-center">
                        Action
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
@include('finance.edit')
</div>


