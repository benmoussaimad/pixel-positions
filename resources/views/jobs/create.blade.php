<x-layout>
    <h1 class="font-bold text-center text-4xl mb-8">New Job</h1>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Ceo"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"/>
        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="video, design, software"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
