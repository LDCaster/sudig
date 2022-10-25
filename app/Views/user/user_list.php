<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>User List</h1>
        </div>
        <div class="section-body">
            <a href="<?= base_url('tambah_akun'); ?>" class="btn btn-info mb-3"><i class="fas fa-plus-circle"></i> Tambah Akun</a>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><img src="/assets/img/avatar/<?= $user->user_img; ?>" height="50px"></td>
                                    <td><?= $user->username; ?></td>
                                    <td><?= $user->email; ?></td>
                                    <td><?= $user->name; ?></td>
                                    <td>
                                        <a href=" <?= base_url('user/detail/' . $user->userid); ?>" class="btn btn-info">Detail</a>
                                        <!-- <a href="/user/hapus/<?= $user->userid; ?>" class=" btn-hapus btn-sm" type="button" onclick="return confirm('Apakah anda yakin ingin hapus user ini?')">Hapus</a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>