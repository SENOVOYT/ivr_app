<x-jet-action-section>
    <x-slot name="title">
        <div class="dark:text-white">
        {{ __('Delete Account') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="dark:text-white">
        {{ __('Permanently delete your account.') }}
        </div>
    </x-slot>
    
    <x-slot name="content" >
        
        <div class="max-w-xl text-sm text-gray-600 dark:text-white">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-jet-danger-button>
        </div>


    </x-slot>
</x-jet-action-section>