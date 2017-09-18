
<h1>Create a note</h1>

@include('partials/errors')


<form method="post" action="{{ url('notes/create')}}"> 
    {!! csrf_field() !!}
    <textarea name="note">{{ old('note') }}</textarea>
    <button type="submit">Create note</button>
</form>


