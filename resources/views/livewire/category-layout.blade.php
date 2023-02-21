<div class="border-2  dark:border-gray-600 rounded-md">
                        <h3 class="dark:text-white my-4 mx-4">Category Layout</h1>
                        <ul  wire:sortable="updateuser_categories" class=" m-2 items-center overflow-y-auto h-96 ">
                            @foreach ( $user_categories as $categories )
                                
                            
                            <li wire:sortable.item="{{ $categories->id }}" wire:key="categories-{{ $categories->id }}" class=" m-1 px-4 py-2 border-b rounded-t-lg text-sm font-medium dark:hover:bg-gray-500 text-gray-900 bg-white border rounded-lg   dark:bg-gray-600 dark:border-gray-600 dark:text-white">
                                <div class=" flex items-end gap-1 ">
                                    <div wire:sortable.handle class=" mr-auto flex">
                                        <svg  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1  dark:fill-white fill-black rounded-md text-gray-500  cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600 "  viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 9H5c-.55 0-1 .45-1 1s.45 1 1 1h14c.55 0 1-.45 1-1s-.45-1-1-1zM5 15h14c.55 0 1-.45 1-1s-.45-1-1-1H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
                                        {{ $categories->category_name }}
                                        {{-- created --}}
        
                                    </div>
                                    
                                     <div class="   items-end gap-1  flex">
                                        <div x-data="{ show: false, timeout: null }"
        x-init="@this.on('addedlink{{ $categories->id }}', () => { clearTimeout(timeout); show = true; timeout = setTimeout(() => { show = false }, 2000); })"
        x-show.transition.opacity.out.duration.1500ms="show"
        class="flex text-sm ml-1 text-green-800 rounded-lg  dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                
        <span class="font-medium">Added Link!</span>
    </div>
                                        <a wire:click="$emit('openModal','see-category-link', {{ json_encode(["category" => $categories->id]) }})'" class=" text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600" ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 fill-green-400 w-5 rounded-md " fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                                        </a>
                                        <a wire:click="$emit('openModal','add-category-link', {{ json_encode(["category" => $categories->id]) }})'" class=" text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5  fill-blue-400 rounded-md " fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                                        </a>
                                        <a wire:click="$emit('openModal','delete-category-link', {{ json_encode(["category" => $categories->id]) }})'" class=" text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 fill-red-400 w-5 rounded-md " fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM9 9h6c.55 0 1 .45 1 1v8c0 .55-.45 1-1 1H9c-.55 0-1-.45-1-1v-8c0-.55.45-1 1-1zm6.5-5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5z"/></svg>
                                        </a>
                                    </div>
                            
                                </div> 
                            </li>
                            @endforeach

                           
                            
                            
                           

                            

                        

                        </ul>
                    </div>
