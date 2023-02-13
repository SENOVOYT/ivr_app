@props(['active'])

@php
$classes = ($active ?? false)
            
           ? 'border-b-2 border-indigo-400 focus:border-indigo-400 text-indigo-700 dark:text-white  transition  flex items-center justify-between w-full  pl-3 pr-4 text-sm font-medium leading-5 text-gray-700 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:w-auto  dark:hover:text-white dark:focus:text-white md:dark:hover:bg-transparent'
           : 'block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white'
            
@endphp
<div class="py-1">
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
</div>

