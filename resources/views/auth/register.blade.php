<x-guest-layout>
    <div class="max-w-md mx-auto p-8 bg-white border border-gray-300 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold text-center text-gray-700 mb-6 font-mono">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="font-medium text-gray-700" />
                <x-text-input id="name" class="block mt-1 w-full border-gray-400 focus:border-gray-600 focus:ring-gray-600 rounded-lg text-gray-800 bg-gray-100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="font-medium text-gray-700" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-400 focus:border-gray-600 focus:ring-gray-600 rounded-lg text-gray-800 bg-gray-100" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="font-medium text-gray-700" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-400 focus:border-gray-600 focus:ring-gray-600 rounded-lg text-gray-800 bg-gray-100" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-medium text-gray-700" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-400 focus:border-gray-600 focus:ring-gray-600 rounded-lg text-gray-800 bg-gray-100" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <a class="text-sm text-gray-600 underline hover:no-underline hover:text-gray-800 font-medium transition duration-300 ease-in-out" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <div class="mt-6">
                <button class="w-full bg-gray-700 hover:bg-gray-800 text-white font-semibold py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
                    {{ __('Register') }}
                </button>
            </div>
        </form>

        <!-- Register dengan Google -->
        <div class="flex flex-col items-center mt-6">
            <p class="text-gray-500 font-mono">-- or --</p>
            <a href="{{ route('google.login') }}" class="mt-4 flex items-center font-mono gap-2 bg-white border-2 border-gray-400 hover:border-gray-600 text-gray-700 hover:text-gray-800 px-6 py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5" alt="Google Logo">
                Register with Google
            </a>
        </div>
    </div>
</x-guest-layout>
