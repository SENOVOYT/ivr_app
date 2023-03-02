<x-action-section-user-edit>
  <x-slot name="title">
      <div class="dark:text-white">
      {{ __('Roles') }}
      </div>
  </x-slot>

  <x-slot name="description">
      <div class="dark:text-white">
      {{ __('User Roles that have been assign.') }}
      </div>
  </x-slot>
  
  <x-slot name="content" >
      
      
<div class="overflow-x-auto max-h-80 shadow-md sm:rounded-lg">
  <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Role
              </th>
              <th scope="col" class="px-6 py-3">
                Permission List
            </th>
              <th scope="col" class="px-6 py-1 text-right">
  
                  
              <a data-tooltip-target="role-add" wire:click='$emit("openModal", "user.add-role-to-user", {{ json_encode(["user" => $user]) }})' class="inline-flex justify-center p-1 ml-auto text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800">

                  <svg xmlns="http://www.w3.org/2000/svg"   class="h-6 w-6 " enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><circle cx="9" cy="8" r="4"/><path d="M9,14c-2.67,0-8,1.34-8,4v1c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v-1C17,15.34,11.67,14,9,14z"/><polygon points="20,10 20,7 18,7 18,10 15,10 15,12 18,12 18,15 20,15 20,12 23,12 23,10"/></g></g></svg>
              </a>
                  <div id="role-add" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-600">
                    Add Role
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
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex flex-wrap gap-1">
                  

<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigoasdaas

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigoasdsd dadasd

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigoadsdasdasdasdsdas

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>
<span id="badge-dismiss-indigo" class="inline-flex items-center px-1 text-sm font-medium text-indigo-800 bg-indigo-100 rounded dark:bg-indigo-900 dark:text-indigo-300">
  Indigo

</span>




                  
                </div>
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

