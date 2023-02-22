<div>
    @foreach ( $sidebar as $side )
<li>
    <button onclick="navbarshowandhide({{ $side->id }})" type="button" class="flex items-center w-full p-2 text-sm font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ $side->category_name }}</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <ul id='navbarshowandhide{{ $side->id }}' class="py-2 hidden space-y-2">
         @foreach ( $side->userlink as $links )
         <li>
            <a href="{{ $links->permission->link }}" class="flex items-center w-full p-2 text-sm font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{  $links->custom_link_name }}</a>
         </li>
         @endforeach 
     
          
    </ul>
 </li>
 @endforeach
 <script>
   var idnav;
   function navbarshowandhide($id){
      if (idnav == $id ){
         idnav= null;
         document.getElementById('navbarshowandhide'+$id).classList.add('hidden');
      }else{
         if(idnav != null){
         document.getElementById('navbarshowandhide'+idnav).classList.add('hidden');
         
      }
      idnav= $id;
         document.getElementById('navbarshowandhide'+$id).classList.remove('hidden');
      }
   }
</script>
</div>

