@extends ('layout')

@section('content')
<div class="columns">
  <div class="column is-4">
    <center><img src="/images/confirmed.png" width="250px" class="image is-round" /></center>
  </div>
  <div class="column is-8">
    <center class="subtitle"><b> Order Information! </b></center>
    <div class="card space">
        <div>Order Placement Date <span class="has-text-primary is-pulled-right">{{ \Carbon\Carbon::parse($orders['date_id'])->diffForHumans() }}</span></div>
        <div>Order ID <span class="has-text-primary is-pulled-right"> {{$orders['transaction_id']}} </span></div>
        <div class="space">Items
            <div class="card space">
                 @foreach($name as $item)
                    <div>{{$item}}</div>
                @endforeach
            </div>
        </div>
        <div>Payment <span class="has-text-primary is-pulled-right">₦{{$orders['total_recieved']}}</span>  </div>
        <div>Delivery Charge <span class="has-text-primary is-pulled-right"> {{$orders['delivery_charge']}} </span></div>
        <div>Address <span class="has-text-primary is-pulled-right">{{$orders['billing_address']}}</span></div>
    </div><br>

  </div>
</div>
@endsection