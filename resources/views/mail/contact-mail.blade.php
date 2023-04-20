<x-mail::message>
# Message



<h1>This mail is from {{ $name }}</h1>
<h2>{{ $name }} says "{{$message}}"</h2>
Contact Information :
<h2>Phone Number : {{$phone}}</h2>
<h2>Mail ID : {{$email}}</h2>


<x-mail::button :url="''">
Visit site
</x-mail::button>

By,<br>
{{ config('app.name') }}
</x-mail::message>
