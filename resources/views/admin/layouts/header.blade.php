<!-- <style>.nav-link.active {
  background-color: red; /* Specify your desired background color here */
  color: white; /* Optionally, you can also change the text color */
}
</style> -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a class="logo d-flex align-items-center">
      <span class="d-none d-lg-block">Admin</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
    <a href="{{ url('/') }}" style="display: inline-block; width: 50px; height: 45px; text-align: center;" target="_blank">
    <i class="bi bi-house-fill" style="font-size: 24px; margin-top: 20px;"></i>
    <div style="font-size: 6px;">Home</div>
</a>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" >
  
      <button title="Search"><i class=""></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li style="margin-left:300px;" class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class=""></i>
          <span class="badge bg-primary badge-number"></span>
        </a><!-- End Notification Icon -->

        <!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class=""></i>
          <span class="badge bg-success badge-number"></span>
        </a><!-- End Messages Icon -->

        <!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="{{ asset('public/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
          @auth
          <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
          @endauth

        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            @auth
            <a href="#" class="d-block">
              @if(auth()->user()->role == 1)
              Super Admin
              @else
              Admin
              @endif
            </a>
            @endauth

            <span></span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('admin/logout')}}">
              <i class="fas fa-sign-out-alt"></i>

              Logout

            </a>

          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{url('/admin/admin/list')}}" class="nav-link {{ request()->segment(2) === 'admin' ? '' : 'collapsed' }}"> <i class="bi bi-grid"></i>
        <span>User</span>
      </a>
    </li><!-- End Dashboard Nav -->
    @endif
    @endauth
    <li class="nav-item">
      <a href="{{url('/admin/maillist')}}" class="nav-link {{ request()->segment(2) === 'maillist' ? '' : 'collapsed' }}">
        <i class="bi bi-menu-button-wide"></i><span>Message</span>
      </a>

    </li><!-- End Components Nav -->

    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{url('/admin/addservice/list')}}" class="nav-link {{ request()->segment(2) === 'addservice' ? '' : 'collapsed' }}"> <i class="bi bi-grid"></i>
        <span>Add Service</span>
      </a>
    </li><!-- End Dashboard Nav -->
    @endif
    @endauth
    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{url('/admin/addteams/list')}}" class="nav-link {{ request()->segment(2) === 'addteams' ? '' : 'collapsed' }}"> <i class="bi bi-question-circle"></i>
        <span>Add Teams</span>
      </a>
    </li><!-- End Dashboard Nav -->
    @endif
    @endauth
    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{url('/admin/client/list')}}" class="nav-link {{ request()->segment(2) === 'client' ? '' : 'collapsed' }}"> <i class="bi bi-person"></i>
        <span>Clients</span>
      </a>
    </li><!-- End Dashboard Nav -->
    @endif
    @endauth
    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{ route('blogsco-list') }}" class="nav-link {{ request()->is('admin/event/*') ? '' : 'collapsed' }}">
        <i class="bi bi-layout-text-window-reverse" aria-hidden="true"></i><span>Events</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{ route('addcontact-list') }}" class="nav-link {{ request()->is('admin/addcontact/*') ? '' : 'collapsed' }}">
        <i class="bi bi-grid" aria-hidden="true"></i><span>Contact</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{ route('resource-list') }}" class="nav-link {{ request()->is('admin/resource/*') ? '' : 'collapsed' }}">
        <i class="bi bi-journal-text" aria-hidden="true"></i><span>Resource</span>
      </a>
    </li>
    @endif
    @endauth
    <!-- <li class="nav-item">
      <a href="{{route('blog-list')}}" class="nav-link {{ request()->segment(2) === 'blog' ? '' : 'collapsed' }}">
        <i class="bi bi-journal-text"></i><span>Work</span>
      </a>
    </li> -->
    <!-- End Forms Nav -->
    <!-- @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('blogsco-list') }}" class="nav-link {{ request()->is('admin/blogseo/*') ? '' : 'collapsed' }}">
        <i class="bi bi-layout-text-window-reverse" aria-hidden="true"></i><span>SEO Blog</span>
      </a>
    </li>
    @endif
    @endauth -->

    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{ route('blog-logo') }}" class="nav-link {{ request()->is('admin/logo/*') ? '' : 'collapsed' }}">
        <i class="bi bi-bar-chart" aria-hidden="true"></i><span>Logo</span>
      </a>
    </li><!-- End Charts Nav -->
    @endif
    @endauth

    @auth
    @if(auth()->user()->is_admin == 1)
    <li class="nav-item">
      <a href="{{ route('logo-list') }}" class="nav-link {{ request()->is('admin/design/*') ? '' : 'collapsed' }}">
        <i class="bi bi-grid" aria-hidden="true"></i><span>Design and Logo</span>
      </a>
    </li><!-- End Charts Nav -->
    @endif
    @endauth
    <li class="nav-item">
      <a href="" class="nav-link {{ request()->is('admin/design/*') ? '' : 'collapsed' }}">
        <i class="" aria-hidden="true"></i><span></span>
      </a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link {{ request()->is('admin/design/*') ? '' : 'collapsed' }}">
        <i class="" aria-hidden="true"></i><span></span>
      </a>
    </li>
    <!-- @auth
    @if(auth()->user()->role == 1)

    <li class="nav-heading">SEO Pages</li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('sco-list') }}" class="nav-link {{ request()->is('admin/seo/*') ? '' : 'collapsed' }}">
        <i class="bi bi-question-circle" aria-hidden="true"></i><span>SEO link</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('home-list') }}" class="nav-link {{ request()->is('admin/home/*') ? '' : 'collapsed' }}">
        <i class="bi bi-person" aria-hidden="true"></i><span>Home</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('about-list') }}" class="nav-link {{ request()->is('admin/about/*') ? '' : 'collapsed' }}">
        <i class="fa fa-tasks" aria-hidden="true"></i><span>About As</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('service-list') }}" class="nav-link {{ request()->is('admin/service/*') ? '' : 'collapsed' }}">
        <i class="bi bi-bar-chart"></i><span>Service</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('contact-list') }}" class="nav-link {{ request()->is('admin/contact/*') ? '' : 'collapsed' }}">
        <i class="bi bi-bell"></i><span>Contact</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('scoblog-list') }}" class="nav-link {{ request()->is('admin/scoblog/*') ? '' : 'collapsed' }}">
        <i class="bi bi-question-circle"></i><span>SEO All Work</span>
      </a>
    </li>
    @endif
    @endauth
    @auth
    @if(auth()->user()->role == 1)
    <li class="nav-item">
      <a href="{{ route('work-list') }}" class="nav-link {{ request()->is('admin/work/*') ? '' : 'collapsed' }}">
        <i class="fa fa-tasks"></i><span>SEO All Blog</span>
      </a>
    </li>
    @endif
    @endauth -->
  </ul>

</aside><!-- End Sidebar-->