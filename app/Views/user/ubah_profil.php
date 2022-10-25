<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Ubah Profile</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <form action="/u_profil/<?= user_id(); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <!-- nama -->
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namalengkap" id="namalengkap" value="<?= $userdata['fullname']; ?>">
                                <!-- nama belakang
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang"> -->
                                <!-- username -->
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" value="<?= $userdata['username']; ?>">
                                <!-- email -->
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="<?= $userdata['email']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <!-- Gambar -->
                                <label for="logo">Foto Profil</label>
                                <div class="row align-items-center mx-1">
                                    <div class="" style="position: relative;">
                                        <img src="/assets/img/avatar/<?= $userdata['user_img']; ?>" class="img-thumbnail img-preview rounded-circle" style="height: 175px; width: 175px;">
                                        <input type="file" class="" name="logo" id="logo" onchange="previewImg()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="<?= base_url('profil'); ?>" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>