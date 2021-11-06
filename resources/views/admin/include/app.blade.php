@include('admin.include.header')

@include('admin.include.nav')

@include('admin.include.sidebar')

<div class="main">
  <div class="">
     @yield('content')
  </div>
</div>






@include('admin.include.footer')
