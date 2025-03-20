<x-guest-layout>
    <div class="max-w-md mx-auto p-4 bg-white rounded-lg">
        <h2 class="text-4xl font-semibold text-center text-gray-800 mb-6 font-mono">Login</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="font-medium text-gray-800" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg text-gray-900" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="font-medium text-gray-800" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg text-gray-900" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-800 font-medium" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Login Button -->
            <div class="mt-6">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>

        <!-- Login dengan Google -->
        <div class="flex flex-col items-center mt-6">
            <p class="text-gray-500 font-mono">-- or --</p>
            <a href="{{ route('google.login') }}" class="mt-4 font-mono flex items-center gap-2 bg-white border-2 border-gray-300 hover:border-indigo-500 text-gray-700 hover:text-indigo-700 px-6 py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5" alt="Google Logo">
                Login dengan Google
            </a>
        </div>

        <div class="flex item-center justify-center mt-5">
            <a href="{{ route('register') }}" class="font-sans text-xs text-neutral-500"><i>I don't have an account</i></a>
        </div>
    </div>
</x-guest-layout>
