@extends ('layout')

@section ('content')
<div class="tile is-ancestor" style="padding: 10px" >
    <div class="tile is-parent is-vertical is-12">
      <article class="tile box is-child">
          <p class="title"> Cart </p>
      @if(Session::has('cart'))
          @foreach($products as $product)
        <div class="card is-12 columns is-extensible is-mobile">
            <div class="column is-2 ">
              <img src="{{ $product['item']['images'] }}" style="width: 100px">
            </div>

            <div class="column is-7">
              {{ $product['item']['name'] }} <br>
              <b> <span>&#x20A6</span>{{ $product['price'] }} </b>
            </div>

            <div class="column is-3"> 
                  <div class="field has-addons" id="field1">
                    <p class="control">
                        <a href="{{ route('product.reduce', ['id' => $product['item']['id']]) }}" class="button" id="sub"> <i class="fa fa-minus"></i> </a>
                        <button class="button" disabled>{{$product['qty']}}</button>
                        <a href="{{ route('product.add', ['id' => $product['item']['id']]) }}" class="button" id="add"> <i class="fa fa-plus"></i> </a>
                        <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" class="button"> <i class="fa fa-remove"></i> </a>
                    </p>
                  </div>
              
            </div>
        </div><br>
        @endforeach
        
        <div class="tile is-parent is-vertical is-12">
      <article class="tile is-child box notification is-danger">
          <b> Total: <span>&#x20A6</span>{{ $totalPrice }} </b>
        <div class="content">
        <a href="/checkout" class="button is-success is-rounded is-pulled-right"> Checkout </a>
        </div>

      @else
        <h1> No Item in the Cart yet!</h1>
      @endif    

        
      </article>
    </div>
</div>
@endsection