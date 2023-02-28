<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Users') }}

        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 py-10 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            @livewire('user.users')
        </div>
    </div>


</x-app-layout>
