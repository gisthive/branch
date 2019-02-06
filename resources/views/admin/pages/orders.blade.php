@extends ('admin.layout')

@section ('content')

 <br><hr>    
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Status</th>
      <th scope="col">Discount</th>
      <th scope="col">Total</th>
      <th scope="col">Total Recieved</th>
      <th scope="col">Tax</th>
      <th scope="col">ID</th>
      <th scope="col">IP</th>
      <th scope="col">Note</th>
      <th scope="col">Billing Address</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Transaction Id</th>
      <th scope="col">Date Id</th>
      <th scope="col">Items</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($order as $orders)
    <tr>
      <th scope="row"> {{$orders['id']}} </th>
      <td> {{$orders['status']}} </td>
      <td> {{$orders['discount']}} </td>
      <td> {{$orders['total']}} </td>
      <td> {{$orders['total_recieved']}} </td>
      <td> {{$orders['tax']}} </td>
      <td> {{$orders['customer_id']}} </td>
      <td> {{$orders['customer_ip']}} </td>
      <td> {{$orders['note']}} </td>
      <td> {{$orders['billing_address']}} </td>
      <td> {{$orders['payment_method']}} </td>
      <td> {{$orders['transaction_id']}} </td>
      <td> {{$orders['date_id']}} </td>
      <td> {{$orders['items']}} </td>
      <form action="/admin/store/orderdelete" method="POST">
          {{ csrf_field() }}
          <td> <button type="submit" class="btn btn-danger" name="id" value=" {{$orders['id']}} ">delete</button> </td>
      </form>
    </tr>
   @endforeach 
  </tbody>
</table>
@endsection