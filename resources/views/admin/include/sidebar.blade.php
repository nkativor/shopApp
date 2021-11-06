<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{url('/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>

        <li class="nav-header">Admin User</li>
        <li class="nav-item">
          <a href="{{ route('products.create') }}" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Add Product/Box

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('orders.index') }}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Orders
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('show') }}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Order Details
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('raffle.index') }}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Raffles
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link"  onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            <i class="nav-icon far fa-image"></i>
            <p>
              logout
            </p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
         </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
