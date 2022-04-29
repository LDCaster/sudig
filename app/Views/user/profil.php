<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User Detail</h1>
        </div>
        <div class=" card-header-action">
            <a class=" btn btn-icon btn-primary" href="<?= base_url('/user'); ?>"><i class="fas fa-angle-left"></i></a>
            <a data-collapse="#mycard-collapse" class="btn btn-icon btn-primary" href="#"><i class="fas fa-minus"></i></a>
        </div>
        <div class="card mb-3 ml-1 card-primary">
            <div class="card-header">
                <h4><?= user()->fullname; ?></h4>
                <div class="card-header-action">
                    <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Aksi</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
            <div class="collapse show" id="mycard-collapse">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="chocolat-parent">
                            <a href="<?= base_url(); ?>/assets/img/avatar/<?= user()->user_img; ?>" class="chocolat-image" title="">
                                <div data-crop-image="380">
                                    <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/<?= user()->user_img; ?>" class=" img-fluid rounded-circle mt-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= user()->username; ?>&nbsp</h4>
                                </li>
                                <li class="list-group-item">
                                    <h6><?= user()->email; ?></h6>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</div>
<footer class=" main-footer">
    <div class="footer-left">
        Copyright &copy; <div class="bullet"></div> Your Website <a href=""><?= date('Y'); ?></a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>
<?= $this->endsection(); ?>