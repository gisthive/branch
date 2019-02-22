<!DOCTYPE html>
<html>
    @include('includes.head') 
    @include('includes.chat')
<body>

    @include('includes.navbar')
    <div class="tabs is-centered">
        <ul>
            <li id="Home"><a href="/"> Home </a></li>
        @foreach ($cat as $cats)
            <li id="{{$cats['name']}}"><a href="/category/{{$cats['name']}} ">{{$cats['name']}}</a></li>
        @endforeach    
        </ul>
    </div>
  <div class="searchBar">
    @include ('includes.errors')
    @include ('includes.success')
  </div>
   <section> 
   <!-- hero component -->
   @if (!Auth::check())
    @yield('hero') 
   @endif  
   <!-- end hero component -->
   <!-- search bar -->
   <br>
    <div class="is-hidden-desktop">
        @include ('includes.search')
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
