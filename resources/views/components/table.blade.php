<table {{$attributes->merge(['class'=>'min-w-full relative divide-gray-200 dark:divide-gray-800'])}}>

    <thead class="bg-gray-50 sticky inset-x-0 top-0  dark:bg-gray-800  ">
        {{-- <tr> --}}
        {{ $head }}
        {{-- </tr> --}}
    </thead>

    <tbody class="bg-white 
       divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
        {{ $body }}
    </tbody>
</table>
