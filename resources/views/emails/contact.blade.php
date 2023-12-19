<x-mail::message>

hello you have a new messege;
<h1>name: {{ $data['name'] }} </h1>
<h1>name: {{ $data['email'] }} </h1>
<h1>name: {{ $data['messege'] }} </h1>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
