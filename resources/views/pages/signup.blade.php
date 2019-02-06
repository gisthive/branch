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
                  
                    <label class="label">Already a customer? <small><a href="/login"> Login! </a></small></label>
      <form method="POST" action="/signup">
        {{ csrf_field() }}    

            @include('includes.errors')
            
        <div class="field">
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="text" placeholder="Your name" name="name" required>
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fa fa-check"></i>
    </span>
  </p>
</div>

                    <div class="field">
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Email" name="email" required>
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
    <input class="input" type="password" placeholder="Password" name="password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Retype Password" name="password_confirmation" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control">
    <button class="button is-success">
      Create Account
    </button>
  </p>
</div>

      </form>

                </div>
              </article>
            </div>
          </div>
    </div>
  </section>
</body>
</html>
