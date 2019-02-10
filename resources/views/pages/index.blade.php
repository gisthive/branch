@extends ('layout')



@section ('content')

<div class="tile is-ancestor" style="padding: 10px">

  <div class="tile is-parent is-vertical is-8">
    <article class="tile is-child">
    <p class="title">On Sale</p>
    <div class="columns is-multiline is-mobile">
          @foreach ($sale as $item)
            <section class="column is-one-third-desktop is-half-mobile">
              @include('includes.card')
            </section>  
            @endforeach
        </div>
    </article>

    <article class="tile is-child">
    <p class="title">Top Rates</p>
    <div class="content columns is-multiline is-mobile">
          @foreach ($top as $item)
            <section class="column is-one-third-desktop is-half-mobile">
              @include('includes.card')
            </section>  
            @endforeach
        </div>
    </article>

      <article class="tile is-child box notification is-danger">
        <p class="title">Wide tile</p>
        <p class="subtitle">Aligned with the right tile</p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
  </div>
  
  
  
  <div class="tile is-parent is-vertical is-4">
          <article class="tile is-child">
          <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true" data-delay="5000">
      <div class='carousel-container'>
        <div class='carousel-item has-background is-active'>
          <img class="is-background" src="https://wikiki.github.io/images/merry-christmas.jpg" alt="" width="640" height="310" />
          <div class="title">Merry Christmas</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://wikiki.github.io/images/singer.jpg" alt="" width="640" height="310" />
          <div class="title">Original Gift: Offer a song with <a href="https://lasongbox.com" target="_blank">La Song Box</a></div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://wikiki.github.io/images/sushi.jpg" alt="" width="640" height="310" />
          <div class="title">Sushi time</div>
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="https://wikiki.github.io/images/life.jpg" alt="" width="640" height="310" />
          <div class="title">Life</div>
        </div>
      </div>
      <div class="carousel-navigation is-overlay">
        <div class="carousel-nav-left">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="carousel-nav-right">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </div>
    </div>

    
      </article>

      <article class="tile is-child">
        <p class="title"> Featured </p>
        <div class="content columns is-multiline is-mobile">
          @foreach ($featured as $item)
          <section class="column  is-half">
            @include('includes.card')
          </section>  
          @endforeach
        </div>
      </article>

      <article class="tile is-child">
        <p class="title">Popular Products</p>
        <div class="content columns is-multiline is-mobile">
          @foreach ($popular as $item)
            <section class="column  is-half">
              @include('includes.card')
            </section>  
            @endforeach
        </div>
      </article>

      <article class="tile is-child">
        <p class="title">Health Tips!</p>
        <div class="content columns is-multiline is-mobile">
        <a href="https://twitter.com/gist_hive?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @gist_hive</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </article>
    </div>

@endsection