<header>
    <strong><a href="/" class="logo"><img class="gambar" src="<?= base_url(); ?>/assets/img/logo.png" width="80" height="50"></a></strong>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#features">Fitur</a>
        <a href="#faq-section">FAQ</a>
        <a href="#contact">Kontak</a>
        <?php if (!logged_in()) : ?>
            <a href="<?= base_url(); ?>/login">Login</a>
        <?php else : ?>
            <a href=" <?= base_url('dashboard'); ?>">Dashboard</a>
        <?php endif; ?>
    </nav>

</header>