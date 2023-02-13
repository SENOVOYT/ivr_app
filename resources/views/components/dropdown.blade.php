@props(['active'])

@php
$classes = ($active ?? false)
            
           ? 'border-b-2 border-indigo-400 focus:border-indigo-400 text-indigo-700 dark:text-white  transition  flex items-center justify-between w-full  pl-3 pr-4 text-sm font-medium leading-5 text-gray-700 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:w-auto  dark:hover:text-white dark:focus:text-white md:dark:hover:bg-transparent'
           : 'focus:border-indigo-700 transition flex items-center justify-between w-full  pl-3 pr-4 text-sm font-medium leading-5 text-gray-700 rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent'
            
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
