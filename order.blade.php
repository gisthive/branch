@include ('includes.head')
@include ('includes.navbar')

<section class="hero is-link is-fullheight-with-navbar" style="background-image: url('/images/confirmed.png'); background-repeat: no-repeat; background-size: 100% 100%; color: black">
  <div class="hero-body">
    <div class="container">
      <p class="title" style="color: black"> Orders </p>
      <div>@include ('includes.success')</div>
      <div>@include ('includes.errors')</div>
           <p>
           @foreach ($orders as $order)
              <div class="card">
                <b>{{$order['transaction_id']}}</b>
                <span class="is-right">{{$order['status']}}</span>
                <b>{{$order['total_recieved']}}</b>
                {{$order['billing_address']}}
                {{$order['date_id']}}
              </div>
            @endforeach  
            </p>
    </div>
  </div>
</section>
        
