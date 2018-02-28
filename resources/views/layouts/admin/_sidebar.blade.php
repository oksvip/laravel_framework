<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="menu" class="form-control" placeholder="搜索...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> <span>首页</span></a></li>
        </ul>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">用户模块</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-user"></i> <span>用户管理</span></a></li>
            <li><a href="#"><i class="fa fa-tag"></i> <span>用户标签管理</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">文章模块</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><i class="fa fa-file-text-o"></i> <span>文章管理</span></a></li>
            <li><a href="#"><i class="fa fa-edit"></i> <span>发布文章</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">统计管理</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><i class="fa fa-user-circle"></i> <span>用户统计</span></a></li>
            <li><a href="#"><i class="fa fa-tags"></i> <span>用户标签统计</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-sort-alpha-asc"></i> <span>排行统计</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">扫码排行</a></li>
                    <li><a href="#">登录排行</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>