@component('mail::message')
# onlineshop welcome mail

Hi dear {{ auth()->user()->name }}

@component('mail::button', ['url' => 'onlineshop.test'])
visit site
@endcomponent

Thanks,<br>
{{ config('app.name') }} admin
@endcomponent
