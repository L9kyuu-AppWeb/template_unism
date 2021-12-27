<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $link_web ?>" class="brand-link">
        <span class="brand-text font-weight-light">Sistem LPM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $link_web ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo $link_web ?>" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="<?php echo $link_web ?>/kepuasan_layanan_mhs" class="nav-link">
                        <i class="nav-icon fa fa-bullhorn"></i>
                        <p>
                            Kepuasan Layanan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $link_web ?>/page/keluar.php" class="nav-link">
                        <i class="nav-icon fas fa-arrow-right"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>