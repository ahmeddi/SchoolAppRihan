<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           
        </h2>
    </x-slot>

    <div class="py-2 print:py-0 ">
        <div class="max-w-7xl mx-2 p-2">
               @livewire('sets')
        </div>
    </div>
</x-app-layout>