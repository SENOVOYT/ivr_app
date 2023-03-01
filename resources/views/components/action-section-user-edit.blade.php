<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-jet-section-title>
        <div class="dark:text-white">
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
        </div>
    </x-jet-section-title>

    <div class="md:col-span-2">
        <div class="dark:bg-gray-600 bg-white shadow sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
