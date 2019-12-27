        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard'); ?>" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Laporan</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('laporan/masuk'); ?>" aria-expanded="false"><i class="fa fa-arrow-down"></i><span class="hide-menu">Laporan Masuk</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('laporan/terima') ?>" aria-expanded="false"><i class="fa fa-clipboard-check"></i><span class="hide-menu">Laporan Diterima</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('laporan/proses') ?>" aria-expanded="false"><i class="fa fa-clock"></i><span class="hide-menu">Laporan Diproses</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('laporan/selesai') ?>" aria-expanded="false"><i class="fa fa-check"></i><span class="hide-menu">Laporan Selesai</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Kelola Aplikasi</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('user'); ?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('kategori'); ?>" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Kategori</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('auth/logout'); ?>" aria-expanded="false"><i class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->