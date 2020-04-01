    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">LLC - ADMIN<sup></sup></div>
        </a>
  
        <hr class="sidebar-divider my-0">
  
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <hr class="sidebar-divider">
  
        <div class="sidebar-heading">
          Interface
        </div>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.images') }}"><i class="fas fa-fw fa-image"></i><span>Images</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('news.index') }}"><i class="fas fa-fw fa-wrench"></i><span>News</span></a>
        </li>
  
        <hr class="sidebar-divider">
  
        <div class="sidebar-heading">
          Addons
        </div>
  
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-fw fa-folder"></i><span>Posts</span></a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="{{ route('schedules.index') }}">e<i class="fas fa-fw fa-chart-area"></i><span>Schedules</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('departments.index') }}">e<i class="fas fa-fw fa-chart-area"></i><span>Departments</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('covidcase.index') }}">e<i class="fas fa-fw fa-chart-area"></i><span>Covid Case Update</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('eo.index') }}">e<i class="fas fa-fw fa-chart-area"></i><span>Executive Orders</span></a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="{{ route('transparencies.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Transparency Files</span></a>
        </li>
  
        <hr class="sidebar-divider d-none d-md-block">
          <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>