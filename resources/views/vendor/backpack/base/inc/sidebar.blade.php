@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li><a href="{{ url('admin/admins') }}"><i class="fa fa-tag"></i> <span>admins</span></a></li>
          <li><a href="{{ url('admin/users') }}"><i class="fa fa-tag"></i> <span>users</span></a></li>
          <li><a href="{{ url('admin/teachers') }}"><i class="fa fa-tag"></i> <span>teachers</span></a></li>
          <li><a href="{{ url('admin/useractions') }}"><i class="fa fa-tag"></i> <span>useractions</span></a></li>
          <li><a href="{{ url('admin/categories') }}"><i class="fa fa-tag"></i> <span>categories</span></a></li>
          <li><a href="{{ url('admin/courses') }}"><i class="fa fa-tag"></i> <span>courses</span></a></li>
          <li><a href="{{ url('admin/discounts') }}"><i class="fa fa-tag"></i> <span>discounts</span></a></li>
          <li><a href="{{ url('admin/packs') }}"><i class="fa fa-tag"></i> <span>packs</span></a></li>
          <li><a href="{{ url('admin/providers') }}"><i class="fa fa-tag"></i> <span>providers</span></a></li>
          <li><a href="{{ url('admin/reviews') }}"><i class="fa fa-tag"></i> <span>reviews</span></a></li>
          <li><a href="{{ url('admin/roles') }}"><i class="fa fa-tag"></i> <span>roles</span></a></li>
          <li><a href="{{ url('admin/sections') }}"><i class="fa fa-tag"></i> <span>sections</span></a></li>
          <li><a href="{{ url('admin/subscribes') }}"><i class="fa fa-tag"></i> <span>subscribes</span></a></li>
          <li><a href="{{ url('admin/tags') }}"><i class="fa fa-tag"></i> <span>tags</span></a></li>

          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
