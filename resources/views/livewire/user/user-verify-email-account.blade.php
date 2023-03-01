<x-jet-action-section>
    <x-slot name="title">
        <div class="dark:text-white">
        {{ __('Verify User') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="dark:text-white">
        {{ __('User account will be verified by email') }}
        </div>
    </x-slot>
    
    <x-slot name="content" >
        
        <div class="max-w-xl text-sm text-gray-600 dark:text-white">
            {{ __('Once the account is verified the user will be able to access the system resources.') }}
        </div>

        <div class="mt-5">
            
            <x-jet-button class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                            wire:click="logoutOtherBrowserSessions"
                            wire:loading.attr="disabled">
                    {{ __('Verify') }}
                </x-jet-button>
        </div>


    </x-slot>
</x-jet-action-section>