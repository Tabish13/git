<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" alt="\" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->first_name }}</p>
        {{-- <p>{{ Auth::user()->name }}</p> --}}
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form> --}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      {{-- <li class="treeview">
      <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Charts</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
  <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
  <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
  <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
  <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
</ul>
</li> --}}

<li class="treeview">
  <a href="#">

    <span>Products</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ route('products.create')}}"><i class="fa fa-circle-o"></i>Add Products</a></li>
    <li><a href="{{ route('products.index')}}"><i class="fa fa-circle-o"></i> Show Products</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">

    <span>Category</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ route('category.create')}}"><i class="fa fa-circle-o"></i>Add Category</a></li>
    <li><a href="{{ route('category.index')}}"><i class="fa fa-circle-o"></i> Show Category</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">

    <span>Orders</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{url('admin/orders/pending')}}"><i class="fa fa-circle-o"></i>Pending Orders</a></li>
    <li><a href="{{url('admin/orders/delivered')}}"><i class="fa fa-circle-o"></i>Delivered Orders</a></li>
    <li><a href="{{url('admin/orders')}}"><i class="fa fa-circle-o"></i>All Orders</a></li>
  </ul>
</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>
