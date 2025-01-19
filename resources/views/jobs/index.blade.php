<x-layout>
    <section class="text-center">
        <h1 class="font-bold text-3xl">Let's Find Your Next Job</h1>
        {{--<form action="">
            <input type="text" placeholder="I'm Looking For..." class="bg-white/5 border border-white/10 rounded-xl py-4 px-5 w-full max-w-xl my-5">
        </form>--}}
        <x-forms.form action="/search" class="mt-5">
            <x-forms.input :label="false" name="q" placeholder="I'm Looking For..."/>
        </x-forms.form>
    </section>
    <section>
        <x-forms.label name="featuredJob" label="Featured Jobs"/>
        <div class="grid lg:grid-cols-3 gap-4 mt-5">
            @foreach($featuredJobs as $job)
                <x-job-card :$job/>
            @endforeach
        </div>
    </section>
    <section>
        <x-forms.label name="tags" label="Tags"/>
        <div class="space-y-1 mt-5">
            @foreach($tags as $tag)
                <x-tag :$tag size="normal"/>
            @endforeach
        </div>
    </section>
    <section>
        <x-forms.label name="recentJobs" label="Recent Jobs"/>
        <div class="space-y-5 mt-5">
            @foreach($jobs as $job)
                <x-job-card-info :$job/>
            @endforeach
        </div>
    </section>
</x-layout>
