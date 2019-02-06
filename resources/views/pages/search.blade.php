@extends ('layout')

@section ('content')
<div class="tile is-ancestor"style="padding: 10px" >
    <div class="tile is-parent is-vertical is-12">
      <article class="tile is-child box">
          
        <div class="content">
            <div class="control has-icons-left has-icons-right">
          <form action="/search" method="POST">
          {{csrf_field()}}
            <input name="q" class="input is-rounded" value="{{$term}}" type="search" placeholder="Find Drugs...">
            <span class="icon is-small is-left">
              <i class="fa fa-search"></i>
            </span>
            <div class="is-small" style="position: absolute; right: 0; top: 0; ">
              <button class="button is-rounded is-primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
          </div>
        </div>
      </article>
    </div>
</div>

<div class="tile is-ancestor"style="padding: 10px" >

  <div class="tile is-parent is-vertical">
    <article class="tile is-child">
      <div class="content">
        <p class="title">Search results</p>
          <div class="content columns is-multiline is-mobile">
          @if($search != '')
          @foreach ($search as $item)
            <section class="column is-one-quarter-desktop is-half-mobile">
              @include('includes.card')
            </section>  
            @endforeach
           @endif 
        </div>
      </div>
    </article>
  </div>

@endsection