<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dasawisma') }}
        </h2>
    </x-slot>

    <div class="py-12 md:px-8">
        <livewire:dasawisma-index></livewire:dasawisma-index>
    </div>
</x-app-layout>
