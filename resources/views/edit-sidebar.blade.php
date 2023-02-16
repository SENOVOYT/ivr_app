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
                        
                        <div class="border-2 dark:border-gray-600 rounded-md">
                        <h3 class="dark:text-white my-4 mx-4">Category Layout</h1>
                        <ul class=" m-2 items-center overflow-y-auto h-96 ">
                            <li class=" m-1 px-4 py-2 border-b rounded-t-lg text-sm font-medium dark:hover:bg-gray-500 text-gray-900 bg-white border rounded-lg   dark:bg-gray-600 dark:border-gray-600 dark:text-white">
                                <div class=" flex items-end gap-1 ">
                                    <div class="">
                                        driansbdsbyds sd sd  sdsubusbbsds
                                    </div>
                                    
                                     <div class=" items-end gap-1 ml-1 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 fill-green-600 w-5 rounded-md " fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5  fill-yellow-500 rounded-md " fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 fill-red-500 w-5 rounded-md " fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM9 9h6c.55 0 1 .45 1 1v8c0 .55-.45 1-1 1H9c-.55 0-1-.45-1-1v-8c0-.55.45-1 1-1zm6.5-5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5z"/></svg>
                                
                                    </div>
                            
                                </div> 
                            </li>

                           
                            
                            
                           

                            

                        

                        </ul>
                    </div>
                    <div class=" md:mt-2 border-2 dark:border-gray-600 rounded-md">




                        
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
    <div class="hidden p-4  m-1 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form class="m-1 ">
            <div class="mb-6">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Custom Link Name</label>
              <input type="email" autocomplete="off" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Custom Link Name" required>
            </div>
        
            <div class="mb-6">
              

                <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Link</label>
                <input type="text" autocomplete="off" id="search_icon" class="shadow-sm mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Search for a Link">
  
                <select multiple id="icon" class="grid-cols-5 grid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Choose icon</option>
                  <option value="US">gvtvhi</option>
                  <option value="CA">Canada</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                </select>
                            </div>
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Custom Link</button>
          </form>    
        </div>
    <div class="hidden mb-48 p-4 m-1 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="mb-3">
        <form class="m-2 mb-2">
            <div class="mb-6">
              <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
              <input type="text" autocomplete="off" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Category Name" required>
            </div>
          
           
            
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Category</button>
          </form>    </div>
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