<x-layout>
    <h1 class="font-bold text-center text-4xl">Results</h1>

    <div class="space-y-5 mt-5">
        @foreach($jobs as $job)
            <x-job-card-info :$job/>
        @endforeach
    </div>
</x-layout>
