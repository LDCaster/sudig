<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Sudig</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SD</a>
        </div>
        <ul class="sidebar-menu">

            <?php if (in_groups('admin')) : ?>
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                    <a href="<?= base_url('user'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>

                <li class="menu-header">Management Akun</li>
                <li class="dropdown">
                    <a href="<?= base_url('user/user_list'); ?>" class="nav-link"><i class="far fa-user"></i> <span>User List</span></a>
                </li>
            <?php endif; ?>

            <li class="menu-header">Kelola Surat</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-envelope-open"></i> <span>Surat</span></a>
                <ul class="dropdown-menu">
                    <?php if (in_groups('admin')) : ?>
                        <li><a href="<?= base_url('user'); ?>"><i class="fas fa-plus"></i>Tambah Surat</a></li>
                        <li><a href="<?= base_url('user'); ?>"><i class="far fa-edit"></i>Kelola Surat Surat</a></li>
                    <?php endif; ?>
                    <li><a href="<?= base_url('logout'); ?>"><i class="fas fa-list"></i></i></i>Daftar Surat</a></li>
                </ul>
            </li>


            <li class="menu-header">Kelola Akun</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?= base_url('user/profil'); ?>"><i class="fas fa-eye"></i>Lihat Akun</a></li>
                    <li><a href="<?= base_url('logout'); ?>"><i class="fas fa-sign-out-alt"></i></i>Logout</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Tentang </span></a>
                <ul class="dropdown-menu">
                    <li><a href="utilities-contact.html">Support</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>