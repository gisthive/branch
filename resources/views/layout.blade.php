<!DOCTYPE html>
<html>
    @include('includes.head') 
<body>

    @include('includes.navbar')
    <div class="tabs is-centered">
        <ul>
        @foreach ($cat as $cats)
            <li><a href="/category/{{$cats['name']}} ">{{$cats['name']}}</a></li>
        @endforeach    
        </ul>
    </div> 
    <div class="is-hidden-desktop">
    <form action="/search" method="POST">
    {{csrf_field()}}
        <input name="q" class="input is-rounded" type="search" placeholder="Find Drugs...">
    </form>
  </div>
   <section> 
    <div class="container is-fluid">
        @yield('content')
    </div>    
    
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1341296995982445"
  theme_color="#13cf13">
</div>

</section> 
    @include('includes.footer')
</body>
</html>
