<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-gray-300 p-5 mt-4 mx-10 mb-3 items-center flex justify-center rounded-lg tracking-wide">
        <p class="font-medium text-sm">
            Welcome to <strong>Clinic Management System</strong>, <br>
            please login. Today's current date and time: <br>
            {{ now()->format('F j, Y, g:i A') }}
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class=" px-6 py-2">
        @csrf

        <!-- Email Address -->
        <div>
            <div class="flex space-x-2 items-center">
                <x-input-label for="email" :value="__('Email')" />
                <i class='bx bxs-envelope text-blue-900'></i>
            </div>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email" 
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="flex space-x-2 items-center">
                <x-input-label for="password" :value="__('Password')" />
                <i class='bx bxs-lock text-blue-900' ></i>
            </div>           
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between mt-4 w-ful">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-900 shadow-sm focus:ring-blue-900" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
            <a class=" text-sm text-blue-600 hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        </div>

        <div class="flex flex-col items-center justify-center mt-6">
            <x-primary-button class="">
                {{ __('Log in to your account') }}
            </x-primary-button>
        </div>

        <div class="flex space-x-3 m-4 w-ful">
            <p class="text-gray-500">Not Registered?</p>
            <a class="text-blue-900 hover:text-blue-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900 font-black" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </div>
    </form>
</x-guest-layout>
