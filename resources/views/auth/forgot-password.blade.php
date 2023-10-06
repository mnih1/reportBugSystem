<x-guest-layout>
    <div class="form-div">
        <form method="POST" action="{{ route('password.email') }}" class="recorvery">
            @csrf
            
                <h1>Password recorvery</h1>

            <div class="inputBox">
                <!-- Email Address -->
                <label for="email">
                    Email:
                    <input id="email" 
                    class="input-form" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </label>
            </div>
            <button type="submit" class="filled btn">Send</button>
        </form>
    </div>
</x-guest-layout>
