<div class="bg-white dark:bg-slate-800 rounded-lg px-6 pt-1 pb-8 ring-1 ring-slate-900/5 shadow-xl">
    <div class="mt-1.5 md:flex md:items-center md:justify-between mb-2">

        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="relative flex -items-center mt-4 md:mt-0">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 mx-2 my-2 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>

                <input wire:model.debounce.700ms="search_permission" type="text" placeholder="Search"
                    class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>

        <div class="inline-flex overflow-hidden">
            <a data-tooltip-target="Permission-add" wire:click='$emit("openModal","authorization.add-permission")' class="inline-flex justify-center p-1 ml-auto text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-900">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-auto" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M17,10c1.08,0,2.09,0.25,3,0.68v-4.3c0-0.83-0.52-1.58-1.3-1.87l-6-2.25c-0.45-0.17-0.95-0.17-1.4,0l-6,2.25 C4.52,4.81,4,5.55,4,6.39v4.7c0,5.05,3.41,9.76,8,10.91c0.03-0.01,0.05-0.02,0.08-0.02C10.8,20.71,10,18.95,10,17 C10,13.13,13.13,10,17,10z"/><path d="M17,12c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S19.76,12,17,12z M19.5,17.5h-2v2c0,0.28-0.22,0.5-0.5,0.5 s-0.5-0.22-0.5-0.5v-2h-2c-0.28,0-0.5-0.22-0.5-0.5s0.22-0.5,0.5-0.5h2v-2c0-0.28,0.22-0.5,0.5-0.5s0.5,0.22,0.5,0.5v2h2 c0.28,0,0.5,0.22,0.5,0.5S19.78,17.5,19.5,17.5z"/></g></g></svg>
                </a>
                <div id="Permission-add" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-600">
                    Add Permission
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
    </div>
    <div >
        <x-table class="">
            <x-slot name="head">
                <x-table.header >
                    {{ __('Permission') }}
                </x-table.header>
                <x-table.header >
                    {{ __('Route Protecting') }}
                </x-table.header>
                <x-table.header class="text-center">
                    {{ __('Action') }}
                </x-table.header>
            </x-slot>
            <x-slot name="body">
                @forelse ( $permissions as $permission)
    
                <x-table.row>
                    <x-table.cell>
                        <span class="text-gray-700 dark:text-gray-200">
                            {{ $permission->name }}
                        </span>
                    </x-table.cell>
                    <x-table.cell>
                        <span class="text-gray-700 dark:text-gray-200">
                            {{ $permission->links->methods }}  {{ $permission->links->name }}  {{ $permission->links->uri }}  {{ $permission->links->actionname }}
                        </span>
                    </x-table.cell>
                   
                    <x-table.cell class="text-center">

                        <div wire:key='dropdown-{{ $permission->id }}' x-data="{ isOpen{{ $permission->id }}: false }" class="relative inline-block">
                            <!-- Dropdown toggle button -->
                            <button @click="isOpen{{ $permission->id }} = !isOpen{{ $permission->id }}" class="relative  flex px-2 border border-transparent focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 items-center text-xs text-center text-gray-900 bg-white rounded-md hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-blue-800 dark:hover:bg-blue-700 dark:focus:ring-gray-100">
                                Action <svg class="w-5 h-5 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        
                            <!-- Dropdown menu -->
                            <div x-show="isOpen{{ $permission->id }}" 
                                @click.away="isOpen{{ $permission->id }} = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90" 
                                class="absolute mt-2 z-10 right-0  origin-top-right bg-gray-100  divide-y divide-gray-200 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                            >
                                <a href="#" class="block dark:text-white px-4 py-2 text-left hover:bg-gray-300 hover:rounded-t-lg dark:hover:bg-gray-600 dark:hover:text-white">Edit Permission name</a>
                                <a href="#" class="block dark:text-white  px-4 py-2 text-left hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"> Change Route </a>
                                <a wire:click='$emit("openModal","authorization.delete-permission")' class="  hover:bg-gray-300 dark:hover:bg-gray-600  flex items-left pl-4 py-2 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg  dark:border-gray-600 dark:bg-gray-700 dark:text-red-500"> 
                                    <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z"></path></svg>

                                    Delete Permission </a>
                                
                            </div>
                        </div>                        
                    </x-table.cell>
                </x-table.row> 
                @empty
                <x-table.row>
                    <x-table.cell>
                        <div class="dark:text-white">No Permissions</div>
                    
                    </x-table.cell>
                    <x-table.cell>
                        
                        </x-table.cell>
                        <x-table.cell>
                           
                            </x-table.cell>
                </x-table.row>
                @endforelse
                    
                
            </x-slot> 
                
                
        </x-table>
    
        {{$permissions->links()}}
        
        
    </div>
</div>
