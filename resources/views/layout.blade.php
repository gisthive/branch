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
  <div class="searchBar">
    @include ('includes.errors')
    @include ('includes.success')
  </div>
   <section> 
   <!-- hero component -->
   <div>
    @include ('includes.hero')
   </div>  
   <!-- end hero component -->
   <!-- search bar -->
    <div class="is-hidden-desktop">
    <form class="searchBar" action="/search" method="POST">
    {{csrf_field()}}
        <input name="q" class="input is-rounded" type="search" placeholder="Find Drugs...">
    </form>
  </div>
  <!-- end search bar -->
  <!-- each page content -->
    <div class="container is-fluid">
        @yield('content')
    </div>    
    <!-- end page content -->
</section> 
<!-- footer -->
    @include('includes.footer')
    <!-- end footer -->
</body>
</html>
