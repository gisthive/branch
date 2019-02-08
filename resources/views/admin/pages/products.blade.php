@extends ('admin.layout')

@section ('content')
                <!-- Button trigger modal -->
        <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Product
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                            <form action="{{route('storeProduct')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                <select name="category" required>
                    <option></option>
                    @foreach ($cat as $cats)
                    <option value=" {{$cats['name']}} "> {{$cats['id']}}: {{$cats['name']}} </option>
                    @endforeach
                </select>
                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Enter name" name="name" required> 
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Enter slug" name="slug" required> 
                  </div>
                  <div class="form-group">
                        <select name="type">
                            <option> Featured </option>
                            <option> None </option>
                            <option> On Sale </option>
                            <option> Best Sellers </option>
                            <option> Popular Products </option>
                            <option> Top Rates </option>
                            <option> Health Tip </option>
                        </select>
                    </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Enter description" name="description" required> </textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Regular price" name="regular_price" required> 
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Sale price" name="sale_price" required> 
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" aria-describedby="" placeholder="Enter stock" name="stock" required> 
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Enter weight" name="weight" required> 
                  </div>
                  <div class="form-group">
                        <label for="exampleFormControlFile1"> Image </label>
                        <input type="file" class="form-control-file" name="file" required>
                    </div>  
                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Enter tag name" name="tag" required> 
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

        
        <br><hr>    
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Type</th>
      <th scope="col">Description</th>
      <th scope="col">Regular price</th>
      <th scope="col">Sale price</th>
      <th scope="col">sku</th>
      <th scope="col">weight</th>
      <th scope="col">category</th>
      <th scope="col">Image</th>
      <th scope="col">Tag</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($prod as $prods)
    <tr>
      <th scope="row"> {{$prods['id']}} </th>
      <td> {{$prods['name']}} </td>
      <td> {{$prods['slug']}} </td>
      <td> {{$prods['type']}} </td>  
      <td> {{$prods['description']}} </td>
      <td> {{$prods['regular_price']}} </td>
      <td> {{$prods['sale_price']}} </td>
      <td> {{$prods['stock_quantity']}} </td>
      <td> {{$prods['weight']}} </td>
      <td> {{$prods['category']}} </td>
      <td> {{$prods['images']}} </td>
      <td> {{$prods['tag']}} </td>
      <form action="{{route('deleteProduct')}}" method="POST">
          {{ csrf_field() }}
          <td> <button type="submit" class="btn btn-danger" name="id" value=" {{$prods['id']}} ">delete</button> </td>
      </form>
    </tr>
   @endforeach 
  </tbody>
</table>
@endsection