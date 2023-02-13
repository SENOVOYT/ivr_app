@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-indigo-700 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none dark:text-white transition'
            : 'md:hover:text-blue-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500  dark:hover:text-white focus:outline-none  transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
