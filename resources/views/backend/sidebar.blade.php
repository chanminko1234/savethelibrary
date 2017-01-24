<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="height: auto;">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-soe.jpg') }}" class="img-circle" alt="User Image" data-pin-nopin="true">
      </div>
      <div class="pull-left info">
        <p>Sayar Soe</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      {{--         @if(\Sentinel::hasAccess('product.show'))
      --}}       
      {{--       @endif --}}


      <ul class="sidebar-menu">

        <li class="treeview">
          <a href="#">
           <i class="fa fa-book" aria-hidden="true"></i>
         </i> <span>Books</span>
         <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active" ><a href="{{ url('backend/marketing-image') }}"><i class="fa fa-circle-o"></i>Books List</a></li>
        <li><a href="{{ url('backend/marketing-image/create') }}"><i class="fa fa-circle-o"></i> Create Books</a></li>

      </ul>
    </li> 

    <li class="treeview">
      <a href="#">
       <i class="fa fa-book" aria-hidden="true"></i>
     </i> <span>Resource Center</span>
     <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="active" ><a href="{{ url('backend/resourcecenter-image') }}"><i class="fa fa-circle-o"></i>Resource Center List</a></li>
    <li><a href="{{ url('backend/resourcecenter-image/create') }}"><i class="fa fa-circle-o"></i> Create Resource Center</a></li>

  </ul>
</li> 

<li class="treeview">
  <a href="#">
   <i class="fa fa-book" aria-hidden="true"></i><span>Library Sliders</span>
   <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li><a href="{{ url('backend/library-slider') }}"><i class="fa fa-circle-o"></i> Library Slider List</a></li>
  <li><a href="{{ url('backend/library-slider/create') }}"><i class="fa fa-circle-o"></i> Create Slider Images</a></li>
</ul>
</li>

<li class="treeview">
  <a href="#">
   <i class="fa fa-book" aria-hidden="true"></i><span>Latest News Sliders</span>
   <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li><a href="{{ url('backend/library-slider') }}"><i class="fa fa-circle-o"></i>Latest News List</a></li>
  <li><a href="{{ url('backend/library-slider/create') }}"><i class="fa fa-circle-o"></i> Create Latest News</a></li>
</ul>
</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-users"></i> <span>User Management</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('backend/user') }}"><i class="fa fa-circle-o"></i> User List</a></li>
    <li><a href="{{ url('backend/user/create') }}"><i class="fa fa-circle-o"></i> Create User</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Category</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('backend/category') }}"><i class="fa fa-circle-o"></i> Category List</a></li>
    <li><a href="{{ url('backend/category/create') }}"><i class="fa fa-circle-o"></i> Category User</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Access Management</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('backend/role') }}"><i class="fa fa-circle-o"></i> Role List</a></li>
    <li><a href="{{ url('backend/role/create') }}"><i class="fa fa-circle-o"></i> Create Role</a></li>
  </ul>
</li>





    {{-- <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Product</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
  </ul>
</section>
<!-- /.sidebar -->
</aside>