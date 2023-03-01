<x-jet-form-section submit="updateProfileInformation">
    
    <x-slot name="title">
        <div class="dark:text-white">
        {{ __('Profile Information') }}
    </div>
    </x-slot>
    
    
    <x-slot name="description">
        <div class="dark:text-white">
        {{ __('Update user\'s account profile information.') }}
    </div>
    </x-slot>
    

    <x-slot name="form">
        <!-- Profile Photo -->
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    {{-- <img src="@if ( Auth::user()->profile_photo_url =="https://ui-avatars.com/api/?name=&color=7F9CF5&background=EBF4FF")
                    https://ui-avatars.com/api/?name=&color=7F9CF5&background=EBF4FF&name={{ Auth::user()->first_name }} 
                    @else
                    {{ Auth::user()->profile_photo_url }}
                    @endif" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover"> --}}
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                {{-- @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif --}}

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
       

            
       
        <div class="col-span-6 grid items-end gap-6 md:grid-cols-2">
            <div> <!-- First Name -->
                <x-jet-label for="first_name" value="{{ __('First Name') }}" />
                <x-jet-input id="first_name" type="text" class="mt-1 block w-full" wire:model.defer="state.first_name" autocomplete="first_name" />
                <x-jet-input-error for="first_name" class="mt-2" />
            </div>
            <div><!-- Email -->
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
            
        </div>



         
         <div class="col-span-6 grid items-end gap-6 md:grid-cols-2">
            <div><!-- Middle Name -->
                <x-jet-label for="middle_name" value="{{ __('Middle Name') }}" />
                <x-jet-input id="middle_name" type="text" class="mt-1 block w-full" wire:model.defer="state.middle_name" autocomplete="middle_name" />
                <x-jet-input-error for="middle_name" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="email_verify" value="{{ __('Email Verified at') }}" />
                <x-jet-input id="email_verify" type="text" class="mt-1 block w-full" wire:model.defer="state.email_verify" autocomplete="email_verify" />
                <x-jet-input-error for="email_verify" class="mt-2" />
            </div>
            
        </div>


        
         <div class="col-span-6 grid items-end gap-6 md:grid-cols-2">
            <div> <!-- Last Name -->
                <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
                <x-jet-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="state.last_name" autocomplete="last_name" />
                <x-jet-input-error for="last_name" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="user_seen" value="{{ __('Last seen') }}" />
                <x-jet-input id="user_seen" type="text" class="mt-1 block w-full" wire:model.defer="state.user_seen" autocomplete="user_seen" />
                <x-jet-input-error for="user_seen" class="mt-2" />
            </div>
            
        </div>
         <div class="col-span-6 grid items-end gap-6 md:grid-cols-2">
            <div>
                <x-jet-label for="user_name" value="{{ __('User Name') }}" />
                <x-jet-input id="user_name" type="text" class="mt-1 block w-full" wire:model.defer="state.user_name" autocomplete="user_name" />
                <x-jet-input-error for="user_name" class="mt-2" />
            </div>
            
        </div>


        
        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>