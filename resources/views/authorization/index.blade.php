<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Authorization  Management') }}

        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            
<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
        <li class="mr-2">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block px-4 py-3 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Roles</button>
        </li>
        <li class="mr-2">
            <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block px-4 py-3 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Permission</button>
        </li>

    </ul>
    <div id="defaultTabContent">
        <div class="hidden bg-white rounded-lg dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
           <livewire:authorization.authorization-role>
        </div>
        <div class="hidden  bg-white rounded-lg dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
            <livewire:authorization.authorization-permission>
        </div>
        
    </div>
</div>

        
    </div>


</x-app-layout>
