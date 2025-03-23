<x-guest-layout>
    <div class="max-w-md mx-auto p-6 bg-white border border-gray-300 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold text-center text-gray-700 mb-6 font-mono">Login</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="font-medium text-gray-700" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-400 focus:border-gray-600 focus:ring-gray-600 rounded-lg text-gray-800 bg-gray-100" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="font-medium text-gray-700" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-400 focus:border-gray-600 focus:ring-gray-600 rounded-lg text-gray-800 bg-gray-100" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-400 text-gray-600 shadow-sm focus:ring-gray-600" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-800 font-medium transition duration-300 ease-in-out" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Login Button -->
            <div class="mt-6">
                <button class="w-full bg-gray-700 hover:bg-gray-800 text-white font-semibold py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>

        <!-- Login dengan Google -->
        <div class="flex flex-col items-center mt-6">
            <p class="text-gray-500 font-mono">-- or --</p>
            <a href="{{ route('google.login') }}" class="mt-4 font-mono flex items-center gap-2 bg-white border-2 border-gray-400 hover:border-gray-600 text-gray-700 hover:text-gray-800 px-6 py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5" alt="Google Logo">
                Login dengan Google
            </a>
        </div>

        <div class="flex item-center justify-center mt-5">
            <a href="{{ route('register') }}" class="font-sans text-xs text-gray-600 underline hover:no-underline hover:text-gray-800 transition duration-300 ease-in-out">
                <i>I don't have an account</i>
            </a>
        </div>
    </div>
</x-guest-layout>
