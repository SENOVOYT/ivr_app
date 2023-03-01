<x-jet-action-section>
    <x-slot name="title">
        <div class="dark:text-white">
        {{ __('Reset Password') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="dark:text-white">
        {{ __('The Password of the User will be Rested to User\'s Email.') }}
        </div>
    </x-slot>
    
    <x-slot name="content" >
        
        <div class="max-w-xl text-sm text-gray-600 dark:text-white">
            {{ __('Once the account is verified the user will be able to access the system resources.') }}
        </div>

        <div class="mt-5">
            
            <x-jet-danger-button
                            wire:click="logoutOtherBrowserSessions"
                            wire:loading.attr="disabled">
                    {{ __('Reset Password') }}
                </x-jet-danger-button>
        </div>


    </x-slot>
</x-jet-action-section>