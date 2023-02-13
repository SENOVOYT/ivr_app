@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 dark:bg-gray-600">
        <div class="text-lg dark:bg-gray-600 dark:text-white">
            {{ $title }}
        </div>

        <div class="mt-4 dark:bg-gray-600 dark:text-white">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row dark:bg-gray-500 justify-end px-6 py-4 bg-gray-100 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>
