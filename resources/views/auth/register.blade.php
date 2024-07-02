<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="password" name="password" type="password"/>
        <x-forms.input label="Password Conformation" name="password_confirmation" type="password"/>

        <x-forms.divider />
        <x-forms.input label="Employer Name" name="employer"/>
        <x-forms.input label="Employer Logo" name="logo" type="file">Logo</x-forms.input>

        <x-forms.button class="button">Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
