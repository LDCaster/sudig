<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php if (in_groups('admin')) : ?>
                <h1>Dashboard</h1>
            <?php endif; ?>
            <?php if (in_groups('user')) : ?>
                <h1>Dokumen Terakhir Kali</h1>
            <?php endif; ?>

        </div>
    </section>

</div>
<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; <div class="bullet"></div> Your Website <a href=""><?= date('Y'); ?></a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>
<?= $this->endsection(); ?>