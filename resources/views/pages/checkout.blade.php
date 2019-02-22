@extends ('layout')

@section('content')
<div class="tile is-ancestor"style="padding: 10px" >

<div class="tile is-parent is-vertical is-4">
        <article class="tile is-child box">
            <p class="title"> Checkout </p>
            <div class="content">
            @foreach($products as $product)
        <div class="card is-12 columns is-extensible is-mobile">
            <div class="column is-12">
                {{ $product['item']['name'] }} <br>
                <b> <span>&#x20A6</span>{{ $product['price'] }} </b>
            </div>
        </div><br>
            @endforeach
      </article>
    </div>

    <div class="tile is-parent is-vertical is-4">
        <article class="tile is-child box">
            <p class="title"> Delivery Address </p>
            <div class="content">
        <div class="is-12 columns is-extensible is-mobile">
            <div class="column">
            <form method="POST" action="{{ route('confirm') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                <div><label><b> Select delivery address </b></label></div>
                 @if ($address2 != '')
                    <span><input name="address" value="{{$address}}" type="radio" class="is-rounded" required> {{$address}} </span>
                    <span><input name="address" value="{{$address2}}" type="radio" class="is-rounded" required> {{$address2}} </span>
                @else
                    <div><input name="address" value="{{$address}}" type="text" class="input is-rounded" placeholder="Delivery Address" required></div><br> 
                @endif
                <div><input name="city" value="{{$city}}" type="text" class="input is-rounded" placeholder="Your City" required></div><br>
                <div><input name="state" value="{{$state}}" type="text" class="input is-rounded" placeholder="State" required></div><br>
                <div><input name="postcode" value="{{$postcode}}" type="text" class="input is-rounded" placeholder="Your PostCode" required></div><br>
                <div><input name="country" value="{{$country}}" type="text" class="input is-rounded" placeholder="Your Country" required></div>
            </div>
        </div><br>
      </article>
    </div>

  <div class="tile is-parent is-vertical">
    <article class="tile is-child box">
      <div class="content">
            <p class="title"> Contact </p>
            <p class="subtitle"> How do we contact you? </p>
    
            
          <div><input type="text" class="input is-rounded" name="name" value="{{$name}}" placeholder="Your name" required></div><br>
            <div><input type="text" class="input is-rounded" name="email" value="{{$email}}" placeholder="Your email" required></div><br> {{-- required --}}
            <div><input type="number" class="input is-rounded" name="phone" value="{{$phone}}" placeholder="Your phone number" required></div><br>
            <div><textarea class="input" name="notes" placeholder="Delivery notes"></textarea></div><br>
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
             @if(!Auth::check())
             <label> Want a faster checkout next time? </label>
             <a href="/signup" class="button is-success is-rounded"> Create An Account </a>
            @endif
           
            </div>
      </div>
    </article>
    
  </div>
  <center class="card is-extensible is-mobile column is-12" style="position: fixed; bottom: 0; z-index: 1">
              <button class="is-primary button is-rounded" style="width: 50%" type="submit" value="Pay Now!">
              <span> Submit Order </span>
              </button>
            </center><br>
</form>

@endsection