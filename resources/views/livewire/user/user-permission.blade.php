<x-action-section-user-edit>
    <x-slot name="title">
        <div class="dark:text-white">
        {{ __('Permissions') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="dark:text-white">
        {{ __('User permission that have been assign.') }}
        </div>
    </x-slot>
    
    <x-slot name="content" >
        
        
<div class="overflow-x-auto max-h-80 shadow-md sm:rounded-lg">
    <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Permission
                </th>
                <th scope="col" class="px-6 py-1 text-right">
                    <a data-tooltip-target="Permission-add" wire:click='$emit("openModal", "user.add-permission-to-user", {{ json_encode(["user" => $user]) }})' class="inline-flex justify-center p-1 ml-auto text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-auto" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M17,10c1.08,0,2.09,0.25,3,0.68v-4.3c0-0.83-0.52-1.58-1.3-1.87l-6-2.25c-0.45-0.17-0.95-0.17-1.4,0l-6,2.25 C4.52,4.81,4,5.55,4,6.39v4.7c0,5.05,3.41,9.76,8,10.91c0.03-0.01,0.05-0.02,0.08-0.02C10.8,20.71,10,18.95,10,17 C10,13.13,13.13,10,17,10z"/><path d="M17,12c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S19.76,12,17,12z M19.5,17.5h-2v2c0,0.28-0.22,0.5-0.5,0.5 s-0.5-0.22-0.5-0.5v-2h-2c-0.28,0-0.5-0.22-0.5-0.5s0.22-0.5,0.5-0.5h2v-2c0-0.28,0.22-0.5,0.5-0.5s0.5,0.22,0.5,0.5v2h2 c0.28,0,0.5,0.22,0.5,0.5S19.78,17.5,19.5,17.5z"/></g></g></svg>
                    </a>
                    <div id="Permission-add" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-600">
                        Add Permission
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </th>
                
            </tr>
        </thead>
        <tbody class=" overflow-y-auto ">
          

            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4 text-right">
                    
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>



    </x-slot>
</x-action-section-user-edit>

