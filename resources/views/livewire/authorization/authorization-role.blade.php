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

                <input wire:model.debounce.700ms="search" type="text" placeholder="Search"
                    class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>

        <div class="inline-flex overflow-hidden">
            <button
            onclick="Livewire.emit('openModal', 'user.add-user-livewire-componenet')"
                class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white uppercase transition-colors duration-200 bg-black rounded-md shrink-0 sm:w-auto gap-x-2 mr-2 dark:bg-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                {{ __('Add Role') }}
            </button>
            </div>
    </div>
    <div >
        <div class="overflow-y-auto  max-h-96" >
        <x-table class="">
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
                <x-table.row>
                    <x-table.cell>
                        <span class="text-gray-700 dark:text-gray-200">
                            dri
                        </span>
                    </x-table.cell>
                    <x-table.cell>




                        <div class="flex flex-wrap gap-1">
                  

            



                        <span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:text-indigo-900">
                            Indigo
                            <button type="button" class="inline-flex items-center p-0.5 ml-1 text-sm text-indigo-400 bg-transparent rounded-sm hover:bg-indigo-200 hover:text-indigo-900 dark:hover:bg-indigo-200 dark:hover:text-indigo-800" data-dismiss-target="#badge-dismiss-indigo" aria-label="Remove">
                                <svg aria-hidden="true" class="w-3.5 h-3.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Remove badge</span>
                            </button>
                          </span>
                          
                        </div>
                    </x-table.cell>
                   
                    <x-table.cell class="text-center">

                
                          
                          <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center text-xs text-center text-gray-900 px-1 bg-white rounded-md hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-blue-800 dark:hover:bg-blue-700 dark:focus:ring-gray-100" type="button"> 
                            <svg class="w-3 h-3 mr-1" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                           <div class="mr-1">Action</div>
                            
                           
                          </button>
                          
                          <!-- Dropdown menu -->
                          <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                              <ul class=" rounded-t-md text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                                
                                <li>
                                    <a href="#" class="block px-4 py-2 text-left hover:bg-gray-100 dark:hover:rounded-t-lg dark:hover:bg-gray-600 dark:hover:text-white">Edit Role name</a>
                                  </li>
                                <li>
                                  <a href="#" class="block px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Permission</a>
                                </li>
                              </ul>
                              <a href="#" class=" flex items-center px-4 py-2 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500">
                                <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z"></path></svg>
                                Delete Permission
                            </a>
                          </div>
                          

                    </td>
                    </x-table.cell>
                </x-table.row> 
                
                
                    
                
            </x-slot>
        </x-table>
        </div>
        
    </div>
</div>
