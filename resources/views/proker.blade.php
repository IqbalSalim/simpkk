<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Program Kerja') }}
        </h2>
    </x-slot>

    <div class="py-12 md:px-8">
        <livewire:proker-index></livewire:proker-index>
    </div>
</x-app-layout>
