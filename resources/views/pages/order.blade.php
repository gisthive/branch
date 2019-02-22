@extends ('layout')

@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/')}}/css/bulma-timeline.min.css" />
@endsection    

@section ('content')
    <div class="timeline">
    <header class="timeline-header">
        <span class="tag is-medium is-primary">Your Order History</span>
    </header>

    @foreach ($orders as $order)
        <div class="timeline-item">
            <div class="timeline-marker is-icon">
            <i class="fa fa-list-alt"></i>
            </div>
            <div class="timeline-content">
            <p class="heading">{{ \Carbon\Carbon::parse($order['date_id'])->diffForHumans() }}</p>
            <p>
            <span class="has-text-primary">₦{{$order['total_recieved']}}</span><br>
            <span class="has-text-primary">{{$order['transaction_id']}}</span><br>
            <a href="{{route('orderInfo', ['id' => $order['transaction_id']])}}" class="button is-rounded is-info is-outlined"> More Details </a>
            </p>
            </div>
        </div>
    @endforeach

    <div class="timeline-header">
        <span class="tag is-medium is-primary">The End</span>
    </div>
    </div>
    
@endsection