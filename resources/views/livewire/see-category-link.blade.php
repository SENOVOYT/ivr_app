
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <button wire:click="$emit('closeModal')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
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
                
            </tr>
        </thead>
        <tbody>
            @forelse ( $link as $l )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $l->custom_link_name }}
                </th>
                <td class="px-6 py-4">
                    {{ $l->permission->link}}
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
