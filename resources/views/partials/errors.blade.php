@if(!$errors->isEmpty())
<p>
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  
</ul>
</p>
@endif