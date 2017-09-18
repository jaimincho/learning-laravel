@extends('layout')


@section('content')
<h2>Notes</h2>
<ul>
    <p>
        <a href="{{ url('notes/create') }}">Add a note</a>
    </p>
    @foreach ($notes as $note)
    <li>
        @if(true)
        <strong>{!! $note->note !!}</strong>
        @else 
        {!! $note->note !!}
        @endif
    </li>
    @endforeach
</ul>

@endsection
