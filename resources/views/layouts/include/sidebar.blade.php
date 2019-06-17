<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    @include('layouts.include.sidebar_user_panel')

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
      <!-- ================================================ -->
      <!-- ==== Recommended place for admin menu items ==== -->
      <!-- ================================================ -->

      @include('layouts.include.sidebar_content')

      <!-- ======================================= -->
      {{-- <li class="header">Other menus</li> --}}
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
