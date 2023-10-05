<x-guest-layout>
    <div class="form-div">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
                <h1>Register</h1>

            <div class="inputBox">
                <label for="name">
                    Name:
                    <input type="text" class="input-form" id="name"
                    name="name" 
                    :value="old('name')" 
                    required autofocus autocomplete="name" >
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </label>
                <!-- Email Address -->
                <label for="email">
                    Email:
                    <input id="email" class="input-form" type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    autocomplete="username" >
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </label>
    
            <!-- Password -->
                <label for="password">
                    Password:
                    <input id="password"
                    type="password"
                    name="password"
                    class="input-form"
                    required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </label>
                <label for="passwordConfirmation">
                    Confirm password:
                    <input type="password" 
                    class="input-form"
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </label>
            </div>

            <button type="submit" class="filled btn">Register</button>
            <div class="link">
                <a href="{{ route('login') }}">I have an account</a>
            </div>
        </form>
    </div>
    
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
