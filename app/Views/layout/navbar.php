<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="<?= base_url(); ?>/assets/img/logo.png" width="30" alt="">
            SUDIG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item me-4">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link " href="#">Cara Kerja</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link " href="#">Layanan Kami</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link " href="/pages/about">Tentang</a>
                </li>
            </ul>
        </div>
        <?php if (!logged_in()) : ?>
            <a href="<?= base_url(); ?>/auth/register" type="button" class="btn btn-success fw-bold mr-2 ">DAFTAR</a>
            <a href="<?= base_url(); ?>/auth/login" type="button" class="btn btn-info text-white fw-bold"">MASUK</a>
                   <?php else : ?>
                       <a href=" <?= base_url(); ?>/user" type="button" class="btn btn-success fw-bold me-2 ">Dashboard</a>
        <?php endif; ?>
    </div>
</nav>