<div class="mb-3">
    <form wire:submit.prevent="save" class="m-2 mb-2">
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
          <input wire:model.lazy='category' type="text" autocomplete="off" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Category Name" required>
        </div>

       <input wire:model='user_id' type="hidden" value="{{ Auth::user()->getId()}}">
        <div class="flex">
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        {{-- created --}}
        <div x-data="{ show: false, timeout: null }"
    x-init="@this.on('saved', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
    x-show.transition.opacity.out.duration.1500ms="show"
    class="flex md:px-5 py-2.5  text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            
    <span class="font-medium">Created!</span>
</div>

{{-- Exist --}}
<div x-data="{ show: false, timeout: null }"
x-init="@this.on('exist', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
x-show.transition.opacity.out.duration.1500ms="show"
class="flex md:px-5 py-2.5  text-sm text-red-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400" role="alert">
<svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        
<span class="font-medium">Exist!</span>
</div>



{{-- error --}}
<div x-data="{ show: false, timeout: null }"
x-init="@this.on('error', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
x-show.transition.opacity.out.duration.1500ms="show"
class="flex md:px-5 py-2.5  text-sm text-red-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400" role="alert">
<svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        
<span class="font-medium">{{ session('message_category_validator_error') }}</span>
</div>


    
   
        
        
        </div>
      </form> 
</div>
