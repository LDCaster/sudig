<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Tambah Akun</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <form action="/tambah_akun" method="POST">
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <!-- nama -->
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namalengkap" id="namalengkap">
                                <!-- nama belakang
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang"> -->
                                <!-- username -->
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                                <!-- email -->
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                                <!-- password -->
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" id="password">
                                <!-- Role -->
                                <label for="role">Role</label>
                                <select name="role" id="" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <!-- Gambar -->
                                <label for="img_user">Foto Profil</label>
                                <div class="row align-items-center mx-1">
                                    <div class="" style="position: relative;">
                                        <img src="/assets/img/avatar/default.png" class="img-thumbnail img-preview rounded-circle" style="height: 175px; width: 175px;">
                                        <input type="file" class="" name="img_user" id="img_user" onchange="previewImg()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="<?= base_url('user_list'); ?>" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Buat</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>