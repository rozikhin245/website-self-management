<div class="flex justify-center p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full max-w-screen-xl mx-auto">
        <!-- Total Funds -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col">
            <h3 class="text-gray-500 text-sm">Funds</h3>
            <p class="text-2xl font-semibold truncate">Rp.{{ number_format($found_amound, 0, ',', '.') }}</p>
            <p class="text-gray-500 text-sm mt-2">This is <span class="text-blue-600">Total funds</span> you have
            </p>
        </div>
        <!-- Total Income -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col">
            <h3 class="text-gray-500 text-sm">Income</h3>
            <p class="text-2xl font-semibold truncate">Rp.{{ number_format($income, 0, ',', '.') }}</p>
            <p class="text-gray-500 text-sm mt-2">This is <span class="text-green-600">Total income</span> you have
            </p>
        </div>
        <!-- Total Expense -->
        <div class="bg-white shadow-md rounded-lg p-4 flex flex-col">
            <h3 class="text-gray-500 text-sm">Expense</h3>
            <p class="text-2xl font-semibold truncate">Rp.{{ number_format($expense, 0, ',', '.') }}</p>
            <p class="text-gray-500 text-sm mt-2">This is <span class="text-red-600">Total expense</span> you have
            </p>
        </div>
        <!-- Control Buttons -->
    </div>
</div>