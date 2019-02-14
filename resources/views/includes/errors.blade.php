@if (count($errors))
    <div class="notification is-danger">
       @foreach($errors as $error)
        {{$errors}}
       @endforeach 
    </div>
@endif               