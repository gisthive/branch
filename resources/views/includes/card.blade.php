<div class="card">
  <?php 
  if($item['sale_price'] == $item['regular_price']){
    $item['regular_price'] = '';
   } else {
    $item['regular_price'] = '₦'.$item['regular_price'];
   }
   
   if(isset($home)){
     $item['id'] = $item['pid'];
   }
   ?>

  <img src="{{ asset($item['images']) }}" alt="Avatar" style="width:100%">
  <div>
    <center><h6><b><a href="{{ route('description', ['id' => $item['id'], 'name' => $item['slug']]) }} "> {{$item['name']}} </a></b><br> <span>&#x20A6</span>{{$item['sale_price']}} <small><del> {{$item['regular_price']}} </del></small> </h6> 
    <a href="/add-to-cart/{{$item['id']}}/" class="button is-primary is-small is-rounded">
    <span class="icon">
      <i class="fa fa-shopping-cart"></i>
    </span>
    <span> ADD TO CART </span>
    </a></center> 
  </div><br>
</div>