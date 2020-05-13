@component('mail::message')

#Thank you for your message

<strong>Name :</strong> {{ $data['name']}}
<strong>Email :</strong> {{ $data['email']}}
<strong>Mobile Number :</strong> {{ $data['mobile_number']}}
<strong>Subject</strong> {{ $data['subject']}}


<strong>Message</strong>

{{ $data['message']}}

@endcomponent
