<x-guest-layout>    
    <x-jet-authentication-card >
        <div class="mb-4">
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>
    
            <x-jet-validation-errors class="mb-4" />
    
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="" required autofocus autocomplete="name" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="username" value="{{ __('Username') }}" />
                    <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="" required autofocus autocomplete="username" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="" required />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>            
    
                <div class="mt-4">
                    <x-jet-label for="location" value="{{ __('Location') }}" />
                    <x-jet-input id="location" class="block mt-1 w-full" type="text" name="location" :value="" required autofocus autocomplete="location" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                    <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="" required autofocus autocomplete="phone_number" />
                </div>            
    
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
    
                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
