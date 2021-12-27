<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="sidebar sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $link_web ?>/file/web/logo_unism.ico" class="img-circle elevation-2" alt="User Image" />
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
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon 	fas fa-cog"></i>
                        <p>
                            Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/admin" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/fakultas" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fakultas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/prodi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Prodi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon 	fas fa-archive"></i>
                        <p>
                            SPMI
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/master_standar" class="nav-link">
                                <i class="fas fa-bullseye nav-icon"></i>
                                <p>Master Standar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/sub_spmi" class="nav-link">
                                <i class="fas fa-bullseye nav-icon"></i>
                                <p>Sub SPMI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/detail_spmi" class="nav-link">
                                <i class="fas fa-bullseye nav-icon"></i>
                                <p>Detail SPMI</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon 	fas fa-user"></i>
                        <p>
                            Responded
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/resp_mahasiswa" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/resp_dosen" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/resp_tendik" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tendik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/resp_mitra" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mitra</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bullhorn"></i>
                        <p>
                            Kepuasan Layanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan_dosen" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan_tendik" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tendik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan_mitra" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mitra</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sd-card"></i>
                        <p>
                            Hasil Kepuasan Layanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan_hasil" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan_dosen_hasil" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan_tendik_hasil" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tendik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $link_web ?>/kepuasan_layanan_mitra_hasil" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mitra</p>
                            </a>
                        </li>
                    </ul>
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