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

                <input wire:model.debounce.700ms="search_role" type="text" placeholder="Search"
                    class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>

        <div class="inline-flex overflow-hidden">
            <a data-tooltip-target="role-add" wire:click='$emit("openModal","authorization.add-role")' class="inline-flex justify-center p-1 ml-auto text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-900">

                <svg xmlns="http://www.w3.org/2000/svg"   class="h-6 w-6 " enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><circle cx="9" cy="8" r="4"/><path d="M9,14c-2.67,0-8,1.34-8,4v1c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v-1C17,15.34,11.67,14,9,14z"/><polygon points="20,10 20,7 18,7 18,10 15,10 15,12 18,12 18,15 20,15 20,12 23,12 23,10"/></g></g></svg>
            </a>
                <div id="role-add" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-600">
                    Add Role
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            
            </div>
    </div>
    <div >
       
        <x-table>
            <x-slot name="head">
                <x-table.header >
                    {{ __('Role') }}
                </x-table.header>
                <x-table.header >
                    {{ __('Permission list') }}
                </x-table.header>
                <x-table.header class="text-center">
                    {{ __('Action') }}
                </x-table.header>
            </x-slot>
            <x-slot name="body" >
                
                
              @forelse($role as $roles)
                <x-table.row>
                    <x-table.cell>
                        <span class="text-gray-700 dark:text-gray-200">
                            {{ $roles->name }}
                        </span>
                    </x-table.cell>
                    <x-table.cell>
                        <div class="flex flex-wrap gap-1">
                          @forelse ( $roles->permissions as $permission )
                          <span id="badge-dismiss-indigo{{ $permission->id }}{{ $roles->id }}" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:text-indigo-900">
                            {{ $permission->name }}
                            <button type="button" class="inline-flex items-center p-0.5 ml-1 text-sm text-indigo-400 bg-transparent rounded-sm hover:bg-indigo-200 hover:text-indigo-900 dark:hover:bg-indigo-200 dark:hover:text-indigo-800" data-dismiss-target="#badge-dismiss-indigo{{ $permission->id }}{{ $roles->id }}" aria-label="Remove">
                                <svg aria-hidden="true" class="w-3.5 h-3.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Remove badge</span>
                            </button>
                          </span>
                          @empty
                          @if($roles->name=='superuser')
                          <span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:text-indigo-900">
                            All Permission Granted
                          </span>
                          @else
                          <span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:text-indigo-900">
                            No Permissions
                          </span>
                          @endif
                          @endforelse
                        
                          
                          
                        </div>
                    </x-table.cell>
                   
                    <x-table.cell class="text-center">

                
                          @if($roles->name=='superuser')
                            <!-- Dropdown menu -->
                          <div wire:key='dropdown-{{ $roles->id }}' x-data="{ isOpen{{ $roles->id }}: false }" class="relative inline-block">
                            <!-- Dropdown toggle button -->
                            <button @click="isOpen{{ $roles->id }} = !isOpen{{ $roles->id }}" class="relative  flex px-2 border border-transparent focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 items-center text-xs text-center text-gray-900 bg-white rounded-md hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-blue-800 dark:hover:bg-blue-700 dark:focus:ring-gray-100">
                                Action <svg class="w-5 h-5 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        
                            <!-- Dropdown menu -->
                            <div x-show="isOpen{{ $roles->id }}" 
                                @click.away="isOpen{{ $roles->id }} = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90" 
                                class="absolute mt-2 z-10 right-0  origin-top-right bg-gray-100  divide-y divide-gray-200 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                            >
                                <a href="#" class="block dark:text-white px-4 py-2 text-left hover:bg-gray-300 hover:rounded-t-lg hover:rounded-b-lg dark:hover:bg-gray-600 dark:hover:text-white">Edit Role name</a>
                                
                            </div>
                        </div>   
                          @else
                          <!-- Dropdown menu -->
                          <div wire:key='dropdown-{{ $roles->id }}' x-data="{ isOpen{{ $roles->id }}: false }" class="relative inline-block">
                            <!-- Dropdown toggle button -->
                            <button @click="isOpen{{ $roles->id }} = !isOpen{{ $roles->id }}" class="relative  flex px-2 border border-transparent focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 items-center text-xs text-center text-gray-900 bg-white rounded-md hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-blue-800 dark:hover:bg-blue-700 dark:focus:ring-gray-100">
                                Action <svg class="w-5 h-5 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        
                            <!-- Dropdown menu -->
                            <div x-show="isOpen{{ $roles->id }}" 
                                @click.away="isOpen{{ $roles->id }} = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90" 
                                class="absolute mt-2 z-10 right-0  origin-top-right bg-gray-100  divide-y divide-gray-200 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                            >
                                <a href="#" class="block dark:text-white px-4 py-2 text-left hover:bg-gray-300 hover:rounded-t-lg dark:hover:bg-gray-600 dark:hover:text-white">Edit Role name</a>
                                <a wire:click='$emit("openModal","authorization.add-permission-to-role")' class="block dark:text-white  px-4 py-2 text-left hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"> Add Permission </a>
                                <a wire:click='$emit("openModal","authorization.delete-role")' class="  hover:bg-gray-300 dark:hover:bg-gray-600  flex items-left pl-4 py-2 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg  dark:border-gray-600 dark:bg-gray-700 dark:text-red-500"> 
                                    <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z"></path></svg>

                                    Delete Role </a>
                                
                            </div>
                        </div> 
                          @endif
          
                          
                          
                          
                    </x-table.cell>
                </x-table.row> 
                @empty
                <x-table.row>
                  <x-table.cell>
                      <div class="dark:text-white">No Roles</div>
                  
                  </x-table.cell>
                  <x-table.cell>
                      
                      </x-table.cell>
                      <x-table.cell>
                         
                          </x-table.cell>
              </x-table.row>
                @endforelse
                
                
                    
                
            </x-slot>
        </x-table>
        {{$role->links()}}
        
        
    </div>
</div>
