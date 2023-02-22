
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
