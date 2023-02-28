@props(['sortable' => null, 'direction' => null])



<th scope="col"
    {{ $attributes->merge(['class' => 'py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400']) }}>

    @unless($sortable)
        <span> {{ $slot }} </span>
    @else
        <button class="flex items-center gap-x-3 focus:outline-none">
            <span>{{ $slot }}</span>
            @switch($direction)
                @case('asc')
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
                    </svg>
                @break

                @case('desc')
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" />
                    </svg>
                @break

                @default
            @endswitch
        </button>
        @endif
    </th>
