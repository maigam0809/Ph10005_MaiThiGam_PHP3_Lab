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
            {{-- Users --}}
            <li>
                <a href="{{route('users.index')}}"><i class="fa fa-users fa-fw"></i>Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('users.index')}}">List Users</a>
                    </li>
                    <li>
                        <a href="{{route('users.add')}}">Add Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
