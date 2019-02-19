@if ($message = Session::get('success'))
    <div class="notification is-success">
        <div>{{!! $message !!}}</div>
    </div>
@endif               