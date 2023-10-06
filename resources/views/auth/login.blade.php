<x-guest-layout>
    <!-- Session Status -->
    <div class="form-div">
        <form method="POST" action="{{ route('login') }}" class="normal">
            @csrf
            
                <h1>Login</h1>

            <div class="inputBox">
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
                    Hasło:
                    <input id="password"
                    type="password"
                    name="password"
                    class="input-form"
                    required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </label>
            </div>
    
            <!-- Remember Me -->
            <div class="block mt-4 checkBox">
                <label for="remember_me" class="remember">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="rmbme ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    <div class="geekmark"></div>
                </label>
            </div>
            <button type="submit" class="filled btn">Login</button>
            <div class="link">
                <a href="{{ route('password.request') }}">I forgot the password</a>
                <a href="{{ route('register') }}">Create a new account</a>
            </div>
        </form>
    </div>
</x-guest-layout>
