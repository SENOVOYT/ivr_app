<x-jet-action-section>
    <x-slot name="title">
        <div class="dark:text-white">
        {{ __('Ban Account') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="dark:text-white">
        {{ __('Temporarily ban account.') }}
        </div>
    </x-slot>
    
    <x-slot name="content" >
        
        <div class="max-w-xl text-sm text-gray-600 dark:text-white">
            {{ __('Once the account is banned the user won’t be able to access the system resources.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Ban Account') }}
            </x-jet-danger-button>
        </div>


    </x-slot>
</x-jet-action-section>