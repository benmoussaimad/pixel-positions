@props(['job'])

<x-panel class="flex-col">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-300">Full stack Laravel Developer</h3>
        <p class="text-lg mt-3">Full Time - from $60,000</p>
    </div>
    <div class="flex justify-between items-end mt-auto">
        <div class="space-x-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="normal"/>
            @endforeach
        </div>
        <x-logo :width="40"/>
    </div>
</x-panel>
