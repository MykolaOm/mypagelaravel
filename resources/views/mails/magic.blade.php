@component('mail::message')
# Introduction

Please follow that steps
- sign up
- confirm
- enjoy

@component('mail::button', ['url' => 'http://testing3.loc/mypage/public/index.php/'])
My Site
@endcomponent


@component('mail::panel', ['url' => ''])
    link for registration
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
