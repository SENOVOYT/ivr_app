<div class="border-2 dark:border-gray-600 rounded-md">
                        <h3 class="dark:text-white my-4 mx-4">Category Layout</h1>
                        <ul  wire:sortable="updateuser_categories" class=" m-2 items-center overflow-y-auto h-96 ">
                            @foreach ( $user_categories as $categories )
                                
                            
                            <li wire:sortable.item="{{ $categories->id }}" wire:key="task-{{ $categories->id }}" class=" m-1 px-4 py-2 border-b rounded-t-lg text-sm font-medium dark:hover:bg-gray-500 text-gray-900 bg-white border rounded-lg   dark:bg-gray-600 dark:border-gray-600 dark:text-white">
                                <div class=" flex items-end gap-1 ">
                                    <div class="">
                                        {{ $categories->category_name }}
                                    </div>
                                    
                                     <div class=" items-end gap-1 ml-1 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 fill-green-600 w-5 rounded-md " fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5  fill-yellow-500 rounded-md " fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 fill-red-500 w-5 rounded-md " fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM9 9h6c.55 0 1 .45 1 1v8c0 .55-.45 1-1 1H9c-.55 0-1-.45-1-1v-8c0-.55.45-1 1-1zm6.5-5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5z"/></svg>
                                
                                    </div>
                            
                                </div> 
                            </li>
                            @endforeach

                           
                            
                            
                           

                            

                        

                        </ul>
                    </div>
