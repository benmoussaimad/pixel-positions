@props(['job'])

<x-panel class="flex-row space-x-5">
    <div>
        <x-logo/>
    </div>
    <div class="flex flex-col w-full">
        <div class="flex justify-between items-center">
            <h3 class="text-sm text-white/60">Laracasts</h3>
            <div class="flex flex-row space-x-1">
                <h3 class="border border-white/20 text-sm rounded-full px-3">Remote</h3>
                <h3 class="border border-white/20 text-sm rounded-full px-3">22h</h3>
            </div>
        </div>
        <div class="self-start font-bold text-lg mt-2">
            <h3 class="group-hover:text-blue-700 transition-colors duration-300">Full stack Laravel Developer</h3>
        </div>
        <div class="flex justify-between items-end mt-auto">
            <p class="text-sm text-white/60">Full Time - from $60,000</p>
            <div class="space-x-1">
                @foreach($job->tags as $tag)
                    <x-tag :$tag size="normal"/>
                @endforeach
            </div>
        </div>
    </div>
</x-panel>
