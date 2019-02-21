<!DOCTYPE html>
<html>
    @include('includes.head') 
    @include('includes.chat')
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
    <form class="searchBar" action="/search" method="POST">
    {{csrf_field()}}
        <input name="q" class="input is-rounded" type="search" placeholder="Find Drugs...">
    </form>
  </div>
  <div class="searchBar">
    @include ('includes.errors')
    @include ('includes.success')
  </div>
   <section> 
   <div><br>
    @include ('includes.hero')
   </div> 
    <div class="container is-fluid">
        @yield('content')
    </div>    
</section> 
    @include('includes.footer')
</body>
</html>
