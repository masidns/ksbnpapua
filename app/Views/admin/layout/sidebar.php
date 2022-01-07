<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
        <img src="<?= base_url('img'); ?>/LOGO_KSBN.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">KSBN PAPUA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets'); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block"><?= session()->get('username'); ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="<?= base_url('/profil'); ?>" class="nav-link <?= session()->get('active') == 'Profil' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-id-card-alt"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/newsevent'); ?>" class="nav-link <?= session()->get('active') == 'News' ? 'active' : ''; ?>">
                        <i class="nav-icon  fas fa-newspaper"></i>
                        <p>
                            News
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>