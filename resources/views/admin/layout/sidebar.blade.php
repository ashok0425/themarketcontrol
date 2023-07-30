
  <!-- partial -->
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.propertyTypes.index')}}">
          <i class="fas fa-envelope menu-icon"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.blogs.index')}}">
          <i class="fas fa-copy menu-icon"></i>
          <span class="menu-title">Blog</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.banners.index')}}">
          <i class="fas fa-image menu-icon"></i>
          <span class="menu-title">Banner</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.websites.edit',1)}}">
          <i class="fas fa-wrench menu-icon"></i>
          <span class="menu-title">Setting</span>
        </a>
      </li>
    </ul>
  </nav>
