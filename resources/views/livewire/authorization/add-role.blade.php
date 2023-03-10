<div class=" dark:bg-slate-900">
    <div class="p-6 dark:bg-slate-900">
    <h2 class="text-lg dark:text-white bold mb-5">Add Role</h2>
    <button wire:click="$emit('closeModal')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-md text-sm absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form wire:submit.prevent="submit" class="dark:bg-slate-900 ">
        <div >
            <div class="mb-1">
                <label for="role_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role Name</label>
                <input wire:model.defer='role_name' type="text" id="role_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="search">
              </div>
        <div class="mb-1">
          <label for="permission" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Search for permissions to add</label>
          <input wire:model.debounce.700ms='search' type="permission" id="permission" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="search">
        </div>
        
        <div class="w-full scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-track-slate-200 scrollbar-thumb-blue-500 dark:scrollbar-track-slate-800 dark:scrollbar-thumb-slate-500 mb-2 h-48 overflow-y-auto text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    @forelse ( $permission as $permissions )
    <button wire:click='click( {"id": {{ $permissions->id }},"name":" {{ $permissions->name }}"})' type="button" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 fill-current" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M17,10c1.08,0,2.09,0.25,3,0.68v-4.3c0-0.83-0.52-1.58-1.3-1.87l-6-2.25c-0.45-0.17-0.95-0.17-1.4,0l-6,2.25 C4.52,4.81,4,5.55,4,6.39v4.7c0,5.05,3.41,9.76,8,10.91c0.03-0.01,0.05-0.02,0.08-0.02C10.8,20.71,10,18.95,10,17 C10,13.13,13.13,10,17,10z"/><path d="M17,12c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S19.76,12,17,12z M19.5,17.5h-2v2c0,0.28-0.22,0.5-0.5,0.5 s-0.5-0.22-0.5-0.5v-2h-2c-0.28,0-0.5-0.22-0.5-0.5s0.22-0.5,0.5-0.5h2v-2c0-0.28,0.22-0.5,0.5-0.5s0.5,0.22,0.5,0.5v2h2 c0.28,0,0.5,0.22,0.5,0.5S19.78,17.5,19.5,17.5z"/></g></g></svg>


        {{ $permissions->name }}

        <div wire:key='permissions{{ $permissions->id }}' x-data="{ show: false, timeout: null }"
    x-init="@this.on('permission_added{{ $permissions->id }}', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 1000); })"
    x-show.transition.opacity.out.duration.1500ms="show">
        
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1 fill-green-600" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/></svg>
        
    </div>


    </button>
    @empty
    <button type="button" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
        <svg xmlns="http://www.w3.org/2000/svg"   class="w-4 h-4 mr-2 fill-current" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><circle cx="9" cy="8" r="4"/><path d="M9,14c-2.67,0-8,1.34-8,4v1c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v-1C17,15.34,11.67,14,9,14z"/><polygon points="20,10 20,7 18,7 18,10 15,10 15,12 18,12 18,15 20,15 20,12 23,12 23,10"/></g></g></svg>

        No Permission
    </button>
    @endforelse
    
   
    
</div>
<div class="flex"><label for="permission" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permission List to be Added to Role</label><div x-data="{ show: false, timeout: null }"
    x-init="@this.on('already_permission', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
    x-show.transition.opacity.out.duration.1500ms="show"
    class="flex px-1 text-sm font-medium text-red-800 rounded-lg  dark:text-red-400" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            
    <span class="font-medium">Already Added!</span>
    </div></div>

<div class="w-full scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-track-slate-200 scrollbar-thumb-blue-500 dark:scrollbar-track-slate-800 dark:scrollbar-thumb-slate-500 mb-2 h-16 overflow-y-auto text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    
    <div class="flex p-2 flex-wrap gap-1">
                  

            
@forelse ($permission_list as $key => $permission_lists)
<span wire:key='permission_lists{{ $permission_lists['id'] }}' class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:text-indigo-900">
    {{ $permission_lists['name'] }}
    <button wire:click='remove({{ $key }})' type="button" class="inline-flex items-center p-0.5 ml-1 text-sm text-indigo-400 bg-transparent rounded-sm hover:bg-indigo-200 hover:text-indigo-900 dark:hover:bg-indigo-200 dark:hover:text-indigo-800" >
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Remove badge</span>
    </button>
  </span>
@empty
<span class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:text-indigo-900">
    No Permission Added
    
  </span> 
@endforelse


        
          
        </div>
</div>

        
        </div>
        <div class="flex mt-1">
            <button type="submit" class="text-white mr-3 mb-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Role</button>
            <button type="button" wire:click="$emit('closeModal')" class="mr-3 text-black mb-1 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Cancel</button>

            {{-- created --}}
            <div x-data="{ show: false, timeout: null }"
        x-init="@this.on('addedrole', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
        x-show.transition.opacity.out.duration.1500ms="show"
        class="flex py-2.5  text-sm text-green-800 rounded-lg  dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                
        <span class="font-medium">Created!</span>
        </div>
        {{-- error --}}
        <div x-data="{ show: false, timeout: null }"
        x-init="@this.on('error', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
        x-show.transition.opacity.out.duration.1500ms="show"
        class="flex px-1 py-2  text-sm text-red-800 rounded-lg  dark:text-red-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            
        <span class="font-medium">{{ session('error') }}</span>
        </div>
        </div>

    </form>
      
    </div>
</div>

 