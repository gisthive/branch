@if (count($errors))
    <div class="notification is-danger">
       @foreach($errors->all() as $error)
        <div>{!! $error !!}</div>
       @endforeach 
    </div>
@endif               