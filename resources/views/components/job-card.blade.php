@props(['job'])

<x-panel class="flex-col">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-lg mt-3">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-end mt-auto">
        <div class="space-x-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="normal"/>
            @endforeach
        </div>
        <x-logo :employer="$job->employer" :width="40"/>
    </div>
</x-panel>
