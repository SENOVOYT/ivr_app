
<div x-data="{}" class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Category Name
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                
                
            </tr>
        </thead>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $link[0]['usercategory']['category_name'] }}
              
            </th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <button wire:click="$emit('openModal','delete-category-link')" class="inline-flex items-center px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> 
                    Edit
                </button>
                <button wire:click="$emit('openModal','icon-picker-livewire-componenet', {{ json_encode(["category" => $category]) }})" class="inline-flex items-center ml-auto px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> 
                    Icon Picker
                </button>
              
            </th>
        </tr>
        <tbody>
        </tbody>
    </table>
    
    <button wire:click="forceclosed" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Custom Link Name
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Link
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                
            </tr>
        </thead>
        <tbody>
            @forelse ( $link as $index => $l )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    @if($editlinkIndex === $index || $editlinkfield === $index.'.custom_link_name')
                    @if($errors->has('link.'.$index.'.custom_link_name'))
                        <div class="text-red-500">{{ $errors->first('link.'.$index.'.custom_link_name') }}</div>
                    @endif
                    <input type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    @click.away="$wire.editlinkfield === '{{ $index }}.custom_link_name' ? $wire.savelink({{ $index }}) : null" 
                    wire:model.defer="link.{{ $index }}.custom_link_name">

                    

                    @else

                    <div wire:click='editlinkfeild({{ $index }}, "custom_link_name")'>{{ $l['custom_link_name'] }} </div>

                    @endif                  
                </th>




                <td class="px-6 py-4">
                
                    {{ $l['permission']['link']}}
                    
                </td>




                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                   @if($editlinkIndex === $index || $editlinkfield === $index.'.custom_link_name')
                   
                   <button wire:click.prevent='savelink({{ $index }})' class="inline-flex items-center px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> 
                    save
                </button>
                   
                   
                @else
                <button wire:click.prevent='editlink({{ $index }})' class="inline-flex items-center px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> 
                    Edit
                </button>
                   @endif
                    
                  
                </td>
            </tr>
            @empty
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th colspan="2" scope="row" class="px-6 text-center center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    No Custom Links Have Been Added
                </th>
                
                
            </tr>
            @endforelse
            
          
        
        </tbody>
    </table>
</div>
