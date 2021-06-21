@extends('layout.site')

@section('title', 'Contacts')

@section('content')
    <h3>This is index view!!!</h3>

    {{-- @foreach ($contacts as $contact)
        <p>{{ $contact['Name'] }}</p>
        <p>{{ $contact['tel'] }}</p>
    @endforeach --}}

    @foreach ($contacts as $contact)
        <p>{{ $contact->Name }}</p>
        <p>{{ $contact->tel }}</p>
    @endforeach
@endsection
