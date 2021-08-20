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
  <li class="treeview {{ (Request::is('admin/service') || Request::is('admin/service/add') || Request::is('admin/service/edit/*') || Request::is('admin/service_category') || Request::is('admin/service_category/add') || Request::is('admin/service_category/edit/*') || Request::is('admin/service_work') || Request::is('admin/service_work/add') || Request::is('admin/service_work/edit/*')? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Services</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/service')  ? 'active' : '') }}"><a href="{{ url('/admin/service') }}"><i class="fa fa-circle-o"></i> Services</a></li>
          <li class="{{ (Request::is('admin/service/add') || Request::is('admin/service/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/service/add') }}"><i class="fa fa-circle-o"></i> Add Service</a></li>
          <li class="{{ (Request::is('admin/service_category') || Request::is('admin/service_category/add') || Request::is('admin/service_category/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/service_category') }}"><i class="fa fa-circle-o"></i> Category</a></li>
          <li class="{{ (Request::is('admin/service_work')  ? 'active' : '') }}"><a href="{{ url('/admin/service_work') }}"><i class="fa fa-circle-o"></i> We Work</a></li>
        </ul>
      </li>
       <li class="treeview {{ (Request::is('admin/testimonial') || Request::is('admin/testimonial/add') || Request::is('admin/testimonial/edit/*') || Request::is('admin/testimonial_logo') || Request::is('admin/testimonial_logo/add') || Request::is('admin/testimonial_logo/edit/*') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Testimonials</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/testimonial') ? 'active' : '') }}"><a href="{{ url('/admin/testimonial') }}"><i class="fa fa-circle-o"></i> Testimonials</a></li>
          <li class="{{ (Request::is('admin/testimonial/add') || Request::is('admin/testimonial/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/testimonial/add') }}"><i class="fa fa-circle-o"></i> Add Testimonial</a></li>
           <li class="{{ (Request::is('admin/testimonial_logo')  ? 'active' : '') }}"><a href="{{ url('/admin/testimonial_logo') }}"><i class="fa fa-circle-o"></i> Logo</a></li>
        </ul>
      </li>
       <li class="treeview {{ (Request::is('admin/team') || Request::is('admin/team/add') || Request::is('admin/team/edit/*') || Request::is('admin/team_category') || Request::is('admin/team_category/add') || Request::is('admin/team_category/edit/*') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Team</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (Request::is('admin/team') ? 'active' : '') }}"><a href="{{ url('/admin/team') }}"><i class="fa fa-circle-o"></i> Team</a></li>
          <li class="{{ (Request::is('admin/team_category') || Request::is('admin/team_category/add') || Request::is('admin/team_category/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/team_category') }}"><i class="fa fa-circle-o"></i> Category</a></li>
          <li class="{{ (Request::is('admin/team/add') || Request::is('admin/team/edit/*') ? 'active' : '') }}"><a href="{{ url('/admin/team/add') }}"><i class="fa fa-circle-o"></i> Add Team</a></li>
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