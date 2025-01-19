@props(['employer', 'width' => 90])

<img class="rounded-lg" src="{{ asset($employer->logo) }}" width="{{ $width }}" alt=""/>
