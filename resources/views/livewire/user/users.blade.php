<div>
    <div class="mt-6 md:flex md:items-center md:justify-between mb-2">

        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="relative flex -items-center mt-4 md:mt-0">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 mx-2 my-2 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>

                <input wire:model.debounce.700ms="search" type="text" placeholder="Search"
                    class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>

        <div class="inline-flex overflow-hidden">
            <button
            onclick="Livewire.emit('openModal', 'user.add-user-livewire-componenet')"
                class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white uppercase transition-colors duration-200 bg-black rounded-md shrink-0 sm:w-auto gap-x-2 mr-2 dark:bg-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                {{ __('Add User') }}
            </button>
            </div>
    </div>
    <div class="overflow-auto">
        <x-table class=" table-auto overflow-x-scroll">
            <x-slot name="head">
                <x-table.header sortable wire:click="sortBy('first_name')" :direction="$sortBy== 'first_name' ? $sortDirection : null">
                    {{ __('Full Name') }}
                </x-table.header>
                <x-table.header sortable wire:click="sortBy('user_name')" :direction="$sortBy == 'user_name' ? $sortDirection : null">
                    {{ __('User Name') }}
                </x-table.header>
                <x-table.header sortable wire:click="sortBy('email')" :direction="$sortBy == 'email' ? $sortDirection : null">
                    {{ __('Email') }}
                </x-table.header>
                <x-table.header >
                    {{ __('Status') }}
                </x-table.header>
                <x-table.header class="text-center">
                    {{ __('Action') }}
                </x-table.header>
            </x-slot>
            <x-slot name="body">
                @foreach ($users as $user)
                    <x-table.row>
                        <x-table.cell>
                            <span class="text-gray-700 dark:text-gray-200">
                                {{ $user->full_name }}
                            </span>
                        </x-table.cell>
                        <x-table.cell>
                            <span class="text-gray-700 dark:text-gray-200">
                                {{ $user->user_name }}
                            </span>
                        </x-table.cell>
                        <x-table.cell>
                            <span class="text-gray-700 dark:text-gray-200">
                                {{ $user->email }}
                            </span>
                        </x-table.cell>
                        <x-table.cell class="place-content-center text-center">
                            @if ($user->sessions->count())
                            <div class="flex dark:text-gray-50 items-center ">
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Online
                            </div>
                            @else
                            <div class="flex dark:text-gray-50 items-center">
                                <div class="h-2.5 w-2.5  rounded-full bg-red-500 mr-2"></div> Offline
                            </div>
                            @endif
                        </x-table.cell>
                        <x-table.cell class="text-center">
                            
                            <a href="/user/{{ $user->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                        </td>
                        </x-table.cell>
                    </x-table.row>
                @endforeach
            </x-slot>
        </x-table>
        {{$users->links()}}
    </div>
</div>
