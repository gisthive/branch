<html>
  @include('includes.head')
  <body>
  <section class="hero is-fullheight is-medium is-primary is-bold">
        <div class="hero-body">
          <div class="container">
            <div class="columns is-centered">
              <article class="card is-rounded">
                <div class="card-content">
                  <h1 class="title">
                  <a class="navbar-item" href="/">
      <img src="/images/logo3.png" alt="Pharmnamics" width="30" height="30"><b style="color: black"> pharmnamics </b>
    </a>
                    </h1>

                    <label class="label">Not yet a customer? <small><a href="/signup"> Signup! </a></small></label>

         <form action="/login" method="POST">    
            {{ csrf_field() }}     
          <div id="app">
            @include ('includes.errors')
           </div> 

                    <div class="field">
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Email" name="email">
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fa fa-check"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password" name="password">
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control">
    <button type="submit" class="button is-success">
      Login
    </button>
  </p>
  </form>
</div>

                </div>
              </article>
            </div>
          </div>
    </div>
  </section>
</body>
</html>
