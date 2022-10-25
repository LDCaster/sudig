<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>User Detail</h1>
        </div>

        <div class="section-body">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class=" card-header-action">
                <a class=" btn btn-icon btn-primary" href="<?= base_url('/user/user_list'); ?>"><i class="fas fa-angle-left"></i></a>
                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-primary" href="#"><i class="fas fa-minus"></i></a>
            </div>
            <div class="card mb-3 ml-1 card-primary">
                <div class="card-header">
                    <h4><?= $user->fullname; ?></h4>
                    <div class="card-header-action">
                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Aksi</a>
                        <div class="dropdown-menu">
                            <form action="/edit_detail/<?= $user->userid; ?>">
                                <a href="/edit_detail/<?= $user->userid; ?>" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                            </form>
                            <form action="/edit_password_detail/<?= $user->userid; ?>">
                                <a href="/edit_password_detail/<?= $user->userid; ?>" class="dropdown-item has-icon"><i class="fas fa-lock"></i> Ubah Password</a>
                            </form>
                            <div class="dropdown-divider"></div>
                            <form action="/user/hapus/<?= $user->userid; ?>" method="post">
                                <?= csrf_field(); ?>
                                <a href="/user/hapus/<?= $user->userid; ?>" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i> Delete</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="chocolat-parent">
                                <a href="/assets/img/avatar/<?= $user->user_img; ?>" class="chocolat-image" title="">
                                    <div data-crop-image="380">
                                        <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/<?= $user->user_img; ?>" class=" img-fluid rounded-circle mt-3">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">

                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= $user->username; ?>&nbsp <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning' ?>"><?= $user->name; ?></span></h4>
                                    </li>
                                    <li class="list-group-item">
                                        <h6><?= $user->email; ?></h6>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endsection(); ?>