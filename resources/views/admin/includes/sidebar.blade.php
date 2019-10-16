<nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img src="{{asset('foryou/img/avatar-7.jpg')}}" alt="person" class="img-fluid rounded-circle">
          <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled"> 
                    
          <li class="{{Request::is('admin/dashboard')?'active':''}}"><a href="{{route('admin.dashboard')}}"> <i class="icon-home"></i>Dashboard</a></li>
          <li class="{{Request::is('admin/department')? 'active': ''}}"><a href="{{route('admin.department.index')}}"> <i class="icon-form"></i>Departments</a></li>
          <li class="{{Request::is('admin/doctor')?'active':''}}"><a href="{{route('admin.doctor.index')}}"> <i class="fa fa-bar-chart"></i>Doctors</a></li>
          <li class="{{Request::is('admin/appoint')?'active':''}}"><a href="{{ route('admin.appoint.show') }}"> <i class="icon-grid"></i>Appointments</a></li>
          <li class="{{Request::is('admin/appoint/history')?'active':''}}"><a href="{{ route('admin.appoint.history') }}"> <i class="fa fa-history"></i>History</a></li>
        </ul>
      </div>
     
    </div>
  </nav>