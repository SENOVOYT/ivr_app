<div>
    
    <livewire:user.update-user-porfile-information :user="$user">
    <x-jet-section-border />
    <div class="mt-10 sm:mt-0">
    <livewire:user.user-permission :user="$user">
    </div>
    <x-jet-section-border />
    <div class="mt-10 sm:mt-0">
    <livewire:user.user-roles :user="$user">
    </div>
    <x-jet-section-border />
    <div class="mt-10 sm:mt-0">
    <livewire:user.user-verify-email-account :user="$user">
    </div>
    <x-jet-section-border />
    <div class="mt-10 sm:mt-0">
    <livewire:user.user-log-out-sessions :user="$user">
    </div>
    <x-jet-section-border />
    <div class="mt-10 sm:mt-0">
    <livewire:user.user-reset-password :user="$user">
    </div>
    <x-jet-section-border />
    <div class="mt-10 sm:mt-0">
    <livewire:user.user-ban-account :user="$user">
    </div>
    <x-jet-section-border />
    <div class="mt-10 sm:mt-0">
    <livewire:user.user-delete-account :user="$user">
    </div>
</div>
