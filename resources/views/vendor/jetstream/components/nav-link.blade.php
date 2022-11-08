@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-xl font-large leading-5 text-white focus:outline-none focus:border-indigo-900 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-white text-xl font-large leading-5 text-white hover:text-[#94a3b8] hover:border-[#f1f5f9] focus:outline-none focus:text-[#94a3b8] focus:border-indigo-900 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
