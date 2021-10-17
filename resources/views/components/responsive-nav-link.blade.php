@props(['active'])

@php
$classes =
    $active ?? false
        ? 'block py-2 border-l-2  block text-white  px-4 focus:outline-none
        text-sm
         border-warning transition duration-150 ease-in-out'
        : 'block items-center px-4 block text-white  border-b-2 border-transparent text-sm py-2
        focus:outline-none  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
