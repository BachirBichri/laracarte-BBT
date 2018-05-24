@component('mail::message')
# Hey admin
-{{ $msg->message }}
-{{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
