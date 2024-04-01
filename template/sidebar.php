<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= $main_url ?>dashboard.php" class="brand-link">
        <span class="brand-text font-weight-light">Keluhan Bahan Awal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?= $main_url ?>dashboard.php"class="nav-link <?= menuHome() ?>">
                <i class="nav-icon fas fa-tachometer-alt text-sm"></i>
                <p>Dashboard</p>
            </a>
            </li>
            <li class="nav-item <?= menuMaster() ?>">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder text-sm"></i>
                <p>
                    Master
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= $main_url ?>form_kba" class="nav-link <?= menuForm_kba() ?>">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>Form KBA</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $main_url ?>huls" class="nav-link <?= menuHuls() ?>">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>Investigasi Huls</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $main_url ?>tanggapan" class="nav-link <?= menuTanggapan() ?>">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>Tanggapan</p>
                        </a>
                    </li>
                </ul>
            </li>
            </a>
            </li>
            <li class="nav-item <?= menuSetting() ?>">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog text-sm"></i>
                <p>
                    Pengaturan
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= $main_url ?>user/data-user.php" class="nav-link <?= menuUser() ?>">
                            <i class="far fa-circle nav-icon text-sm"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>