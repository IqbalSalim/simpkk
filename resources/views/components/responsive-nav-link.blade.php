@props(['active'])

    @php
        $classes = ($active ?? false)
        ? 'block py-2 border-l-2 md:border-b-2 md:border-l-0 block text-white md:flex md:px-2 px-4 focus:outline-none
        text-sm
        hover:text-warning hover:bg-opacity-5 border-warning transition duration-150 ease-in-out'
        : 'block items-center px-4 block text-white md:flex border-b-2 border-transparent text-sm py-2
        md:px-2 focus:outline-none hover:text-warning hover:bg-opacity-5 transition duration-150 ease-in-out';
    @endphp

    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
