<div class="dark:bg-gray-800 ">
    <div class="p-2">
     <div class=" flex">

        <label for="first_name" class="block mb-2 text-sm font-medium px-2 text-gray-900 pt-2 dark:text-white">Search Icon</label>  
          <button class="inline-flex items-center ml-auto px-4 py-2 mb-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:click="$emit('openModal','edit-category-livewire-component', {{ json_encode(["category" => $category]) }})'"> back </button>



     </div>

        <input wire:model.debounce.500ms='icon' type="text" id="icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">


    </div>
        
    
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class=" overflow-y-auto h-80 p-2 grid grid-cols-10 gap-2">
        @foreach ( $icons as $icon)
        <img class=" border-2 border-gray-400 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-300 w-6 h-6 dark:bg-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" src="{{ asset($icon['icon_path']) }}" /> 
        @endforeach
        
        

    </div>
</div>
