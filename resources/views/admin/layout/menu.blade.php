  <!-- /.navbar-top-links -->

  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
         @if($user_login->quyen==1)
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            

            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>Tin Tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/tintuc/danhsach">Danh Sách</a>
                    </li>
                    <li>
                        <a href="admin/tintuc/them">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>Slide<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/slide/danhsach">Danh Sách</a>
                    </li>
                    <li>
                        <a href="admin/slide/them">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>Khoa<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/khoa/danhsach">Danh Sách</a>
                    </li>
                    <li>
                        <a href="admin/khoa/them">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>Bac Si<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/bacsi/danhsach">Danh Sách</a>
                    </li>
                    <li>
                        <a href="admin/bacsi/them">Thêm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/user/danhsach">List User</a>
                    </li>
                    <li>
                        <a href="admin/user/them">Add User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @else
                <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>message<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/front/message">Danh Sách</a>
                    </li>
                  
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
            <!-- /.navbar-static-side -->