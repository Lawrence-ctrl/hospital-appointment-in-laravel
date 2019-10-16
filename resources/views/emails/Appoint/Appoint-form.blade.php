@component('mail::message')
# Appointment

    Your Booking number is {{ $new }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
