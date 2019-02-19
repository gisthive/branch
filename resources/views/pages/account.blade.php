@extends ('layout')

@section ('content')
<div class="tile is-ancestor"style="padding: 10px" >
    <div class="tile is-parent is-vertical is-3">
      <article class="tile is-child box notification is-danger">
        <p class="title">{{ Auth::user()->name }}
        @if ($account['role'] != '')
          ({{$account['role']}})
        @endif  
        </p>
        <div class="content">
        <p> Profile Image </p>

            <center><img src="{{$account['image']}}" class="image is-round column circle is-6" /></center>

          <form action="{{route('editAccountImage')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="file" class="input is-outline is-round" required/><hr>
            <button type="submit" class="button is-round is-outline"> Change Image </button>
            
          </form>
          <a href="{{route('order')}}" class="button is-primary is-right is-round is-outline"> Order History </a>
        </div>
      </article>
    </div>

  <div class="tile is-parent is-vertical">
    <article class="tile is-child box notification is-success">
      <div class="content">
        <p class="title">Account & Delivery Info.</p>
        <div class="content">
          <div class="columns">
            <div class="column">
            <form action="{{route('editAccount')}}" method="POST">
              {{csrf_field()}}
              <div><input class="input is-outline is-round" placeholder="email" required name="id" value="{{Auth::user()->email}}" /></div><br>
              <div><input class="input is-outline is-round" placeholder="Mobile number" name="phone" required value="{{$account['phone']}}" /></div><br>
              <div><input class="input is-outline is-round" placeholder="PostCode (optional)" name="postcode" value="{{$account['postcode']}}" required /></div><br>
              <div><select class="input is-outline is-round" name="country">
                <option value="Nigeria"> Nigeria </option>
              </select></div><br>

            </div>
            <div class="column">
            <div><input class="input is-outline is-round" placeholder="Apartment or house address" name="address_1" required value="{{$account['address_1']}}" /></div><br>
            <div><input class="input is-outline is-round" placeholder="Alternative address" required name="address_2" value="{{$account['address_2']}}" /></div><br>
            <div><input class="input is-outline is-round" placeholder="City" name="city" required value="{{$city}}" /></div><br>
            <div><input class="input is-outline is-round" placeholder="State" name="state" required value="{{$state}}" /></div><br>
          </div>
          </div>
           <button type="submit" class="button is-primary is-outline is-round follow"> Save Account Information </button>
          </form>
        </div>
        
      </div>
    </article>
  </div>
@endsection