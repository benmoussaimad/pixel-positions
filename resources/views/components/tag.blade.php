@props(['size' => 'small'])

@php
    $classes="bg-white/10 hover:bg-white/25 px-4 py-1 rounded-xl transition-colors duration-300";

    if($size === 'small'){
        $classes .= " text-xs";
    }

    if($size === 'normal'){
        $classes .= " text-sm";
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>
