<x-guest-layout>

    <div class="bg-gray-300 p-5 mt-4 mx-10 mb-3 items-center flex justify-center rounded-lg tracking-wide">
        <p class="font-medium text-sm">
            Welcome to <strong>Clinic Management System</strong>, <br>
            please register. Today's current date and time: <br>
            {{ now()->format('F j, Y, g:i A') }}
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}"  class=" px-6 py-2">
        @csrf

        <!-- Name -->
        <div>
            <div class="flex space-x-2 items-center">
                <x-input-label for="email" :value="__('Name')" />
                <i class='bx bxs-user text-blue-900'></i>
            </div>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <div class="flex space-x-2 items-center">
                <x-input-label for="email" :value="__('Email')" />
                <i class='bx bxs-envelope text-blue-900'></i>
            </div>            
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <div class="flex space-x-2 items-center">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <i class='bx bxs-lock text-blue-900' ></i>
            </div>  

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-center mt-6">
            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div class="flex space-x-3 m-4 w-ful">
            <p class="text-gray-500">Already registered?</p>
            <a class="text-blue-900 font-black hover:text-blue-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>
