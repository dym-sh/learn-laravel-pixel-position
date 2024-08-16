<x-layout>
  <x-page-heading>Login</x-page-heading>

  <x-forms.form method="post" action="/login">
    <x-forms.input label="E-Mail" name="email" type="email" />
    <x-forms.input label="Password" name="password" type="password" />

    <x-forms.button>Login</x-forms.button>
  </x-forms.form>

</x-layout>