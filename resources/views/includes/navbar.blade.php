<nav class="navbar is-transparent is-primary">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="/images/logo4.png" alt="Pharmnamics logo" height="30">
    </a>
    
    <div class="is-hidden-desktop is-hoverable dropdown" style="margin-top: 10px">
  <div class="dropdown-trigger">
    <button class="button is-primary is-rounded" aria-haspopup="true" aria-controls="dropdown-menu">
      <span class="icon is-small">
        <i class="fa fa-user" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu" role="menu">
    <div class="dropdown-content">
    @if (Auth::check())
    <a class="navbar-item" href="/account">
      {{ Auth::user()->name }}
    </a>
    <a class="navbar-item" href="/logout">
       Logout
    </a>
    @else
    <a class="navbar-item" href="/signup">
      Sign up
    </a>
    <a class="navbar-item" href="/login">
       Log in
    </a>
    @endif
    </div>
  </div>
</div>

<div class="navbar-item is-hidden-desktop">
<div class="field is-grouped">
  <p class="control">
    <a href="/cart" class="button 
    @if(Session::has('cart'))
    badge
    @endif
     is-primary is-inverted is-rounded" data-badge=" {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }} ">
      <span class="icon">
        <i class="fa fa-shopping-cart"></i>
      </span>
      <span>
      Cart
      </span>
    </a>
  </p>
</div>
</div>

<div class="navbar-item is-hidden-desktop">
<div class="field is-grouped">
  <p class="control">
    <a href="{{route('notification')}}" class="button 
    @if(Session::has('notification'))
    badge
    @endif
     is-primary is-inverted is-rounded" data-badge=" {{ Session::has('notification') ? Session::get('notification')->totalQty : '' }} ">
      <span class="icon">
        <i class="fa fa-bell"></i>
      </span>
    </a>
  </p>
</div>
</div>



    <div class="navbar-burger burger" data-target="pharmNav">
      <span></span>
      <span></span>
      <span></span>
    </div>

    

  </div>

<div id="pharmNav" class="navbar-menu">
    <div class="navbar-start">
  <a class="navbar-item is-active" href="/">
        Home
      </a>

  <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Medicines
        </a>

        <div class="navbar-dropdown">
        @foreach ($med as $meds)
          <a href="/category/{{ $meds['name'] }}" class="navbar-item">
           {{ $meds['name'] }}
          </a>
        @endforeach
        </div>
      </div>

      <a class="navbar-item" href="/faq">
        FAQs
      </a>
      <a class="navbar-item" href="https://goo.gl/forms/sLuLMRFa0CxT9itv1">
        Contact
      </a>
      
      @if (Auth::check())
      <a class="navbar-item" href="/account">
        {{ Auth::user()->name }}
      </a>
      <a class="navbar-item" href="/logout">
         Logout
      </a>
      @else
      <a class="navbar-item" href="/signup">
        Sign up
      </a>
      <a class="navbar-item" href="/login">
         Log in
      </a>
      @endif
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a href="/cart" class="button 
            @if(Session::has('cart'))
            badge
            @endif
             is-primary is-inverted is-rounded" data-badge=" {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }} ">
              <span class="icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
              <span>
              Cart
              </span>
            </a>
          </p>
        </div>
      </div>

      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a href="{{route('notification')}}" class="button 
            @if(Session::has('notification'))
            badge
            @endif
             is-primary is-inverted is-rounded" data-badge=" {{ Session::has('notification') ? Session::get('notification')->totalQty : '' }} ">
              <span class="icon">
                <i class="fa fa-bell
                "></i>
              </span>
            </a>
          </p>
        </div>
      </div>

      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
          <form action="/search" method="POST">
          {{csrf_field()}}
            <input name="q" class="input is-rounded" type="search" placeholder="Find Drugs...">
          </form>
            </p>
            </div>
            </div>


    </div> 
      </div>
    </div>
</nav>