<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edit Sidebar') }}
            
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
        <form class="mr-1 mb-0.5 ml-1 mt-1 ">
            <div class="mb-6">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Custom Link Name</label>
              <input type="email" autocomplete="off" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Custom Link Name" required>
            </div>
        
            <div class="mb-6">
              

                <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Link</label>
                <input type="text" autocomplete="off" id="search" class="shadow-sm mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Search for a Link">
  
                <select multiple id="icon" class="grid-cols-5 grid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="" selected>Choose Link</option>
                </select>
                            </div>
                            <div class="flex">
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
         <div class="flex md:px-5 py-2.5  text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            
                          <span class="font-medium">Created!</span>
            
          </div>
        
        </div>
        </form>    
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

    <script type="text/javascript">






// Get the input box
var textInput = document.getElementById('search');

// Init a timeout variable to be used below
var timeout = null;

// Listen for keystroke events
textInput.onkeyup = function (e) {

    // Clear the timeout if it has already been set.
    // This will prevent the previous task from executing
    // if it has been less than <MILLISECONDS>
    clearTimeout(timeout);

    // Make a new timeout set to go off in 800ms
    timeout = setTimeout(function () {
        


        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':textInput.value},
            success:function(data){
            $('select').html(data); }
        });






    }, 800);
};
  
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>



    
</x-app-layout>