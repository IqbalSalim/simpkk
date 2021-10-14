<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Warta Kegiatan') }}
        </h2>
    </x-slot>

    <div class="py-12 md:px-8">
        <livewire:warta-index></livewire:warta-index>
    </div>
</x-app-layout>
