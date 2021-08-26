<!-- Left side column. contains the logo and sidebar -->
<?php $user = Auth::user(); ?>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        @if ($user->avatar!='')
          <img src="{{ asset('/uploads/'.$user->avatar) }}" class="img-circle" alt="User Image">
        @else
          <img src="{{ asset("/admin_lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        @endif
      </div>
      <div class="pull-left info">
        <p>{{$user->name}}</p>
        <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li class="{{ (Request::is('admin') ? 'active' : '') }}">
        <a href="{{ url('/admin') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview {{ (Request::is('admin/page') || Request::is('admin/page/add') || Request::is('admin/page/edit/*') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Pages</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/page') ? 'active' : '') }}"><a href="{{ url('/admin/page') }}"><i class="fa fa-circle-o"></i> Pages</a></li>
          <li class="{{ (Request::is('admin/page/add') || Request::is('admin/page/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/page/add') }}"><i class="fa fa-circle-o"></i> Add Page</a></li>
        </ul>
      </li>

     
  <li class="treeview {{ (Request::is('admin/location') || Request::is('admin/location/add') || Request::is('admin/location/edit/*')? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Locations</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/location')  ? 'active' : '') }}"><a href="{{ url('/admin/location') }}"><i class="fa fa-circle-o"></i> Locations</a></li>
          <li class="{{ (Request::is('admin/location/add') || Request::is('admin/location/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/location/add') }}"><i class="fa fa-circle-o"></i> Add Location</a></li>
        
        </ul>
      </li>
           <li class="treeview {{ (Request::is('admin/jobpage') || Request::is('admin/jobpage/add') || Request::is('admin/jobpage/edit/*') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Job Pages</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/jobpage') ? 'active' : '') }}"><a href="{{ url('/admin/jobpage') }}"><i class="fa fa-circle-o"></i> Job Pages</a></li>
          <li class="{{ (Request::is('admin/jobpage/add') || Request::is('admin/jobpage/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/jobpage/add') }}"><i class="fa fa-circle-o"></i> Add Job Page</a></li>
        </ul>
      </li>
      <li class="treeview {{ (Request::is('admin/forms') || Request::is('admin/forms/view/*') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Forms</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/forms') ? 'active' : '') }}"><a href="{{ url('/admin/forms') }}"><i class="fa fa-circle-o"></i> Forms</a></li>
        </ul>
      </li>
      <li class="treeview {{ (Request::is('admin/settings') || Request::is('admin/emailtemplate') || Request::is('admin/user-permission') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-cog"></i> <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/settings') ? 'active' : '') }}"><a href="{{ url('/admin/settings') }}"><i class="fa fa-circle-o"></i> Settings</a></li>
          <li class="{{ (Request::is('admin/emailtemplate') ? 'active' : '') }}"><a href="{{ url('/admin/emailtemplate') }}"><i class="fa fa-circle-o"></i> Email Template</a></li>
        </ul>
      </li> 

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>