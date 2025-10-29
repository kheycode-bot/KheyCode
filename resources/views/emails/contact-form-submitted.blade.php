@component('mail::message')
# New Contact Form Submission

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Subject:** {{ $data['subject'] ?? 'No subject provided' }}

**Message:**  
{{ $data['message'] }}

Thanks,  
{{ config('app.name') }}
@endcomponent