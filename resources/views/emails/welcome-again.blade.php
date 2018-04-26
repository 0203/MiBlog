@component('mail::message')
# Introduction

Thanks for Register! Welcome to MiBlog.com.

Please login to create a post.

Login using your email address and password.

Enjoy the news :)

@component('mail::button', ['url' => 'mizrablog.ml'])
MiBlog Home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
