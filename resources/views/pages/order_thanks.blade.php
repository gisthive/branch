@extends ('layout')

@section('content')
<div class="columns">
  <div class="column is-4">
    <center><img src="/images/successful.png" width="250px" class="image is-round" /></center>
  </div>
  <div class="column is-8">
    <center class="subtitle"><b> Thank You</b></center>
    <div class="card space">
        <div>Date <span class="has-text-primary is-pulled-right">{{ \Carbon\Carbon::parse($orders['date_id'])->diffForHumans() }}</span></div>
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

    <center class="card space">
        <a class = "button is-rounded is-danger is-outlined is-medium" style="width: 70%"> Track Your Order </a>
    </center><br>

    <center><b class = "title"> ₦{{$orders['total_recieved']}} </b><br>
        <small> We have recieved your payment. Your Items are shipping soon </small><br><br>

        <a href="{{route('order')}}" class = "button is-rounded is-dark is-outline is-large"> <span class="icon"><i class="fa fa-remove"></i></span> </a>
    </center>

  </div>
</div>
@endsection