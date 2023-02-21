
<div class="p-4 bg-gray-50 dark:bg-gray-800">
<form wire:submit.prevent="save" class="mr-1 mb-0.5 ml-1 mt-1 ">
  <button wire:click="$emit('closeModal')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Close menu</span>
</button>
   

    <div class="mb-6">
      
      
        <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Custom Link</label>
        <input type="text" wire:model.debounce.500ms="addsearch" autocomplete="off"  class="shadow-sm mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Search for a Custom Link">

        <select wire:model='addlink_name' required multiple class="grid-cols-5 grid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="" selected>Choose Link</option>
          
            
         
          @forelse ( $addlinks as $l )
          <option value="{{ $l->id }}" >{{ $l->custom_link_name }}</option>
          @empty
          @if($addsearch!="")
          <option >No Links Found</option>
          @endif
          @endforelse
        
          
         
        </select>
        
                    </div>
                    <div class="flex">
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Link</button>
    {{-- created --}}
    <div x-data="{ show: false, timeout: null }"
x-init="@this.on('addedlink', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
x-show.transition.opacity.out.duration.1500ms="show"
class="flex md:px-5 py-2.5  text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
<svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        
<span class="font-medium">Created!</span>
</div>

{{-- Exist --}}
<div x-data="{ show: false, timeout: null }"
x-init="@this.on('existcustomlink', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
x-show.transition.opacity.out.duration.1500ms="show"
class="flex md:px-5 py-2.5  text-sm text-red-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400" role="alert">
<svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    
<span class="font-medium">Exist!</span>
</div>





{{-- error --}}
<div x-data="{ show: false, timeout: null }"
x-init="@this.on('message_customlinkadd_validator_error', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
x-show.transition.opacity.out.duration.1500ms="show"
class="flex md:px-5 py-2.5  text-sm text-red-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400" role="alert">
<svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    
<span class="font-medium">{{ session('message_customlinkadd_validator_error') }}</span>
</div>








</div>
</form>    
</div>
