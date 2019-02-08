@extends ('admin.layout')

@section('content')
<br><hr>    

       <!-- Button trigger modal -->
       <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add role
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                            <form action="{{route('storeRole')}}" method="POST">
                            {{ csrf_field() }}
                <div class="form-group">
                    <select name="type" required>
                      <option></option>
                      <option> Featured </option>
                      <option> None </option>
                      <option> On Sale </option>
                      <option> Best Sellers </option>
                      <option> Popular Products </option>
                      <option> Top Rates </option>
                    </select>
                  </div>

                <div class="form-group">
                    <select name="id" required>
                      <option></option>
                      @foreach ($products as $product)
                      <option value="{{$product['id']}}"> {{$product['name']}} </option>
                      @endforeach
                    </select>
                  </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
            </div>
        </div>
        </div>
        <!---->


        <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">p#</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Type</th>
      <th scope="col">Regular price</th>
      <th scope="col">Sale price</th>
      <th scope="col">sku</th>
      <th scope="col">category</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach ($role as $roles)
    <tr>
      <th scope="row"> {{$roles['id']}} </th>
      <th scope="row"> {{$roles['pid']}} </th>
      <td> {{$roles['name']}} </td>
      <td> {{$roles['slug']}} </td>
      <td> {{$roles['type']}} </td>
      <td> {{$roles['regular_price']}} </td>
      <td> {{$roles['sale_price']}} </td>
      <td> {{$roles['stock_quantity']}} </td>
      <td> {{$roles['category']}} </td>
      <td> {{$roles['images']}} </td>
      <form action="{{route('delete_role')}}" method="POST">
          {{ csrf_field() }}
          <td> <button type="submit" class="btn btn-danger" name="id" value=" {{$roles['id']}} ">delete</button> </td>
      </form>
    </tr>
   @endforeach 
  </tbody>
</table>
@endsection