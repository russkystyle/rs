@component('mail::message')
# Introduction

Вам пришла заявка от: {{ $order['name'] }}
Телефон: {{ $order['phone'] }}
Email: {{ $order['email'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
