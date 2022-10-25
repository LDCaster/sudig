<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Ubah Password</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <form action="/ubah_password_detail/<?= $userdata['id']; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <!-- password baru -->
                                <label for="password_baru">Password Baru</label>
                                <input type="password" class="form-control <?= $validation->hasError('password_baru') ? 'is-invalid' : ''; ?>" name="password_baru" id="password_baru">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('password_baru'); ?>
                                </div>
                                <!-- verifikasi password lama -->
                                <label for="v_password_baru">Verifikasi Password Baru</label>
                                <input type="password" class="form-control <?= $validation->hasError('v_password_baru') ? 'is-invalid' : ''; ?>" name="v_password_baru" id="v_password_baru">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('v_password_baru'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-1">

                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-danger" type="reset">Kembali</button>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>