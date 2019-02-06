@extends ('admin.layout')

@section('content')
<br><hr>    
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Role</th>
      <th scope="col">Image</th>
      <th scope="col">Add1</th>
      <th scope="col">Add2</th>
      <th scope="col">work</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">postcode</th>
      <th scope="col">country</th>
      <th scope="col">phone</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach ($customer as $customers)
    <tr>
      <th scope="row"> {{$customers['id']}} </th>
      <td> {{$customers['role']}} </td>
      <td> {{$customers['image']}} </td>
      <td> {{$customers['address_1']}} </td>
      <td> {{$customers['address_2']}} </td>
      <td> {{$customers['work']}} </td>
      <td> {{$customers['city']}} </td>
      <td> {{$customers['state']}} </td>
      <td> {{$customers['postcode']}} </td>
      <td> {{$customers['country']}} </td>
      <td> {{$customers['phone']}} </td>
    </tr>
   @endforeach 
  </tbody>
</table>
@endsection