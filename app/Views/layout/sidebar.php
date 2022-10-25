<div class="main-sidebar sidebar-style-2" style="background-color: #f9f9f9;">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <!-- <a href="/">Sudig</a> --> <img src="<?= base_url(); ?>/assets/img/logo.png" height="50" alt="">
        </div>
        <div class=" sidebar-brand sidebar-brand-sm">
            <a href="index.html">SD</a>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="<?= base_url('dashboard'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li> -->
            <?php if (in_groups('admin')) : ?>
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
            <?php endif; ?>
            <?php if (in_groups('user')) : ?>
                <!-- <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                </li> -->
            <?php endif; ?>
            <?php if (in_groups('admin')) : ?>
                <li class="menu-header">Management Akun</li>
                <li class="dropdown">
                    <a href="<?= base_url('user_list'); ?>" class="nav-link"><i class="fas fa-users"></i> <span>User List</span></a>
                </li>
            <?php endif; ?>

            <li class="menu-header">Surat</li>
            <li class="dropdown">
                <?php if (in_groups('admin')) : ?>
                    <a href="<?= base_url('kelola_surat'); ?>" class="nav-link"><i class="far fa-envelope-open"></i> <span>History Surat</span></a>
                <?php endif; ?>
                <?php if (in_groups('user')) : ?>
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link"><i class="fas fa-history"></i><span>Riwayat Surat</span></a>
                    <a href="<?= base_url('tanda_tangan'); ?>" class="nav-link"><i class="fas fa-signature"></i><span>Buat Tanda Tangan</span></a>
                    <a href="<?= base_url('daftar_surat'); ?>" class="nav-link"><i class="far fa-envelope-open"></i> <span>Buat Surat</span></a>
                <?php endif; ?>
            </li>

            <li class="menu-header">Kelola Akun</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?= base_url('profil'); ?>"><i class="fas fa-eye"></i>Lihat Akun</a></li>
                    <li><a href="<?= base_url('logout'); ?>"><i class="fas fa-sign-out-alt"></i></i>Logout</a></li>
                </ul>
            </li>
            <!-- <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Tentang </span></a>
                <ul class="dropdown-menu">
                    <li><a href="utilities-contact.html">Support</a></li>
                </ul>
            </li> -->
        </ul>
    </aside>
</div>