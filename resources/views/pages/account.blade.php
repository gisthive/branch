@extends ('layout')

@section ('content')
<div class="tile is-ancestor"style="padding: 10px" >
    <div class="tile is-parent is-vertical is-3">
      <article class="tile is-child box notification is-danger">
        <p class="title">{{ Auth::user()->name }}</p>
        <div class="content">
          <!-- Content -->
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
              <input class="input" placeholder="email" required/>
              <input class="input" placeholder="Mobile number" required/>
              <input class="input" placeholder="PostCode (optional)" name="postcode" />
              <select class="input" name="country">
                <option value="Nigeria"> Nigeria </option>
              </select>
              
            </div>
            <div class="column">
              <input class="input" placeholder="Address 1" required/>
              <input class="input" placeholder="Address 2 (optional)" />
              <input class="input" placeholder="City (optional)" />
              <input class="input" placeholder="State (optional)" />
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
@endsection