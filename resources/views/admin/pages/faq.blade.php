@extends ('admin.layout')

@section ('content')
                <!-- Button trigger modal -->
        <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Faq
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Faq</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                            <form action="{{route('storeFaq')}}" method="POST">
                            {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Enter title" name="title" required> 
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Enter body" name="body" required> 
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

        <!-- edit Modal -->
        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">edit Faq</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                            <form action="{{route('editFaq')}}" method="POST">
                            {{ csrf_field() }}
                <div>
                    <select name="id" required>
                      <option></option>
                      @foreach ($faq as $faqs)
                        <option value=" {{$faqs['id']}} "> {{$faqs['id']}}: {{$faqs['title']}} </option>
                      @endforeach
                    </select>
                </div>            
                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="" placeholder="Enter title" name="title" required>
                  </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Body" name="body" required>
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
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($faq as $faqs)
    <tr>
      <th scope="row"> {{$faqs['id']}} </th>
      <td> {{$faqs['title']}} </td>
      <td> {{$faqs['body']}} </td>
      <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"> edit </button> </td>
      <form action="{{route('deleteFaq')}}" method="POST">
          {{ csrf_field() }}
          <td> <button type="submit" class="btn btn-danger" name="id" value=" {{$faqs['id']}} ">delete</button> </td>
      </form>
    </tr>
   @endforeach 
  </tbody>
</table>
@endsection