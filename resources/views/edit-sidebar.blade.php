<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl leading-tight">
            {{ __('User Management') }}
            
        </h2>

        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-gray-500 dark:border-gray-700 dark:border dark:bg-slate-700">
                <div class="p-6 bg-white  dark:bg-slate-900">
                    <div class="p-6 bg-white dark:bg-slate-900">
                        <div class="grid items-end gap-2 md:grid-cols-2">
                        
                            <livewire:category-layout/>
                    <div class=" border-2 dark:border-gray-600 rounded-md">




                        
<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Create Link</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Create Category</button>
        </li>
        
    </ul>
</div>
<div id="myTabContent">
    <div class="hidden p-4 md:mb-1.5 m-1 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <livewire:create-custom-link>
        </div>
    <div class="hidden mb-48 p-4 m-1 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        
        
            <livewire:create-category />
        
        
        </div>
    
</div>

                          



                    </div>
                </div>
                        

                        
                    </div>
            </div>
        </div>
        </div>
    </div>

    
    



    
</x-app-layout>