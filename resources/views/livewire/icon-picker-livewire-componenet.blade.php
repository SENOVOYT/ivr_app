<div class="dark:bg-gray-800">
    <div class="p-2">

        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Search Icon</label>
        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">


    </div>
        
    {{ $category }}
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button wire:click="$emit('openModal','edit-category-livewire-component', {{ json_encode(["category" => $category]) }})'"> back </button>
    <div class="  p-2 grid grid-cols-10 gap-2">
        <img class=" border-2 border-gray-400 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-300 w-6 h-6 dark:bg-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" src="{{ asset('vendor/svg/c/camera-outdoor-tt.svg') }}" />


    </div>
</div>
