<x-mail::message>
# Welcome

Hi {{ $user->name }},
<br>
Welcome to laracamp, your account has been created successfully. Now you can choose your best match camp!

<x-mail::button :url="route('login')">
Login here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
