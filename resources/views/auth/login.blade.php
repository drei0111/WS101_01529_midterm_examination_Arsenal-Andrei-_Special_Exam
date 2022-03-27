<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
          
        </x-slot>
   
        <x-jet-validation-errors class="mb-4" />
   
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
   
        <form method="POST" action="{{ route('login') }}">
            @csrf
   
            <div>
                <x-jet-label value="{{ __('Username/Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="identity" :value="old('email')" required autofocus />
            </div>
   
            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
   
            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
   
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
  
                <div class="w3-container"><button class="w3-btn w3-black">
                    {{ __('Login') }}
                </button></a>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>