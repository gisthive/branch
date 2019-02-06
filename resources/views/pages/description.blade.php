@extends ('layout')

@section ('content')
<div class="tile is-ancestor"style="padding: 10px" >
    <div class="tile is-parent is-vertical is-4">
      <article class="tile is-child box notification is-danger">
        <p class="title">Drug Name</p>
        <p class="subtitle">Describe d shit here</p> 
        <div class="content">
          <!-- Content -->
        </div>
      </article>
    </div>

  <div class="tile is-parent is-vertical">
    <article class="tile is-child box notification is-success">
      <div class="content">
        <p class="title">Drug Image here</p>
        <p class="subtitle">add to cart or shit + mg + weight</p>
        <div class="content">
          <!-- Content -->
        </div>
      </div>
    </article>

      <article class="tile is-child box notification is-danger">
        <p class="title">Related Shit</p>
        <p class="subtitle">And another array of stupid desc.</p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
  </div>
@endsection