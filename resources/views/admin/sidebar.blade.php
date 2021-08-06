<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
            </li>
            {{-- students --}}
            <li>
                <a href="{{ route('students.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> students<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('students.index') }}">List students</a>
                    </li>
                    <li>

                        <a href="{{ route('students.add') }}">Add students</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            {{-- Products --}}
{{--
            <li>
                <a href="{{route('admin.products.index')}}"><i class="fa fa-cube fa-fw"></i> Products<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.products.index')}}">List Products</a>
                    </li>
                    <li>
                        <a href="{{route('admin.products.create')}}">Add Products</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> --}}

            {{-- <li>
                <a href="{{route('admin.invoices.index')}}"><i class="fa fa-shopping-cart fa-fw"></i> Invoices<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.invoices.index')}}">List Invoices</a>
                    </li>
                    <li>
                        <a href="{{route('admin.invoices.create')}}">Add Invoices</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="{{route('admin.users.create')}}"><i class="fa fa-users fa-fw"></i>Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.users.index')}}">List Users</a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.create')}}">Add Users</a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
