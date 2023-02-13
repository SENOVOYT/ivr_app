<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img  style="height: 80px" src="https://smart-bz.com/wp-content/uploads/2022/06/logo.png">
        </x-slot>
        <form method="POST" action="{{ route('user.rested.process') }}">
            <x-jet-validation-errors class="mb-4" />
        <div class="mb-4 text-sm dark:text-white text-gray-600">
            {{ __('Before continuing, could you update your password by entering a new password and clicking on the update button.') }}
        </div>
        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>
        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>
        

        <div class="mt-4 flex items-center justify-between">
            
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Update') }}
                    </x-jet-button>
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 dark:text-white  hover:text-gray-900"
                >
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm dark:text-white text-gray-600 hover:text-gray-900 ml-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>