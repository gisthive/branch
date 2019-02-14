@extends ('layout')

@section ('content')
<div class="tile is-ancestor"style="padding: 10px" >
    <div class="tile is-parent is-vertical is-4">
      <article class="tile is-child box notification is-danger">
        <img class="image is-round" src="{{asset($image)}}" />
      </article>
    </div>

  <div class="tile is-parent is-vertical">
    <article class="tile is-child box notification is-success">
      <div class="content">
        <p class="title">{{$name}}</p>
        <p class="subtitle">{{$desc}}</p>
      </div>
    </article>

    <article class="tile is-child">
      <div class="columns is-multiline is-mobile">
      @foreach ($category as $item)
        <section class="column is-one-third-desktop is-half-mobile">
          @include('includes.card')
        </section>  
        @endforeach
    </div>
    </article>
  </div>
@endsection