
    <form wire:submit.prevent="save" class="mr-1 mb-0.5 ml-1 mt-1 ">
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Custom Link Name</label>
          <input wire:model.lazy='custom_link_name' type="text" required autocomplete="off" id="custom_link_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Custom Link Name" required>
        </div>
    
        <div class="mb-6">
          

            <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Link</label>
            <input type="text" wire:model.debounce.500ms="search" autocomplete="off"  class="shadow-sm mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Search for a Link">

            <select wire:model='link_name' required multiple id="icon" class="grid-cols-5 grid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="" selected>Choose Link</option>
              
                
             
              @forelse ( $links as $l )
              <option value="{{ $l->id }}" >{{ $l->link }}</option>
              @empty
              @if($search!="")
              <option >No Links Found</option>
              @endif
              @endforelse
            
              
             
            </select>
            
                        </div>
                        <div class="flex">
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        @if (session()->has('message_category_success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)" class="flex md:px-5 py-2.5  text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            
                          <span class="font-medium">Created!</span>
            
          </div>
    @endif
    @if (session()->has('message_category_name_error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)" class="flex md:px-5 py-2.5  text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            
                          <span class="font-medium">Exist!</span>
            
          </div>
    @endif
    
    </div>
    </form>    
