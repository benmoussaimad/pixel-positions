<x-layout>
    <h1 class="font-bold text-center text-4xl mb-8">Register</h1>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Your Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>

        <x-forms.divider/>

        <x-forms.input label="Employer Name" name="employer_name"/>
        <x-forms.input label="Employer Logo" name="logo" type="file"/>

        <x-forms.button>Create an account</x-forms.button>
    </x-forms.form>
</x-layout>
