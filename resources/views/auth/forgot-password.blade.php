<x-guest-layout>
    <div class="flex flex-col items-center justify-center gap-6">
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        
        <form method="POST" action="{{ route('password.email') }}" class="rounded-2xl bg-secondary py-8 px-10 flex items-center justify-center flex-col gap-3 text-white">
            @csrf

            <h2 class="text-2xl">Password recorvery</h2>
            
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Reset') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
</x-guest-layout>
