@include ('includes.head')
@include ('includes.navbar')

<section class="hero is-link is-fullheight-with-navbar" style="background-image: url('/images/questions.png'); background-repeat: no-repeat; background-size: 100% 100%; color: black">
  <div class="hero-body">
    <div class="container">
      <p class="title" style="color: black"> Confirm Order? </p>
      <p class="subtitle" style="color: black"> Your Order will arrive within 30 minutes of placement. </p>
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
            <input type="hidden" name="email" value="{{$all['email']}}"> {{-- required --}}
            <input type="hidden" name="orderID" value="{{$all['rand']}}">
            <input type="hidden" name="amount" value="{{Session::get('cart')->totalPrice * 100}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="{{Session::get('cart')->totalQty}}">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['address' => $all['address'], 'city' => $all['city'], 'state' => $all['state'], 'postcode' => $all['postcode'], 'country' => $all['country'], 'name' => $all['name'], 'phone' => $all['phone'], 'notes' => $all['notes']]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            <p>
              <button class="button is-rounded is-primary" type="submit" value="Pay Now!">
               Confirmed, continue!
              </button>
              <a href="/" class="button is-rounded"> No, go home </a>
            </p>
</form>
    </div>
  </div>
</section>
        
