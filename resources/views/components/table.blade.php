<div class=" overflow-x-auto scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-track-slate-200 scrollbar-thumb-blue-500 dark:scrollbar-track-slate-800 dark:scrollbar-thumb-slate-500">    

<table {{$attributes->merge(['class'=>'min-w-full relative divide-gray-200 dark:divide-gray-800'])}}>

    <thead class="bg-gray-50 sticky inset-x-0 top-0 z-10 dark:bg-gray-800  ">
        {{-- <tr> --}}
        {{ $head }}
        {{-- </tr> --}}
    </thead>

    <tbody class="bg-white 
       divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
        {{ $body }}
    </tbody>
</table>
</div>
