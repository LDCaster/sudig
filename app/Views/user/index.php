<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <?php if (in_groups('admin')) : ?>
                <h1>Dashboard</h1>
            <?php endif; ?>
            <?php if (in_groups('user')) : ?>
                <h1>Riwayat Surat</h1>
            <?php endif; ?>
        </div>
        <div class="section-body">
            <?php if (in_groups('admin')) : ?>

            <?php endif; ?>
            <?php if (in_groups('user')) : ?>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <table class="table" style="background-color: #fff;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Dibuat</th>
                            <th>Di Update pada tanggal`</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($riwayatsurat as $s) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $s['nm_jenis']; ?></td>
                                <td><?= $s['created_at']; ?></td>
                                <td><?= $s['updated_at']; ?></td>
                                <td>
                                    <a href="/lihat/<?= $s['nm_jenis']; ?>" class=" btn-lihat btn-sm" type="button">Lihat</a>
                                    <a href="/ubah/<?= $s['nm_jenis']; ?>" class=" btn-ubah btn-sm" type="button">Ubah</a>
                                    <a href="/surat/hapus/<?= $s['id_surat']; ?>" class=" btn-hapus btn-sm" type="button" onclick="return confirm('Apakah anda yakin ingin hapus surat ini?')">Hapus</a>
                                    <!-- <a href="#modalDelete" class=" btn-hapus btn-sm" data-toggle="modal">Hapus</a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </section>
    <?php foreach ($riwayatsurat as $s) : ?>
        <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDelete">Apakah anda yakin ingin hapus data?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Data yang dihapus tidak akan dapat kembali.
                    </div>
                    <div class="modal-footer">
                        <form action="" id="formDelete" method="post"></form>
                        <button type="button" class="btn-kembali" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-hapus">
                            <a style="color: white;" href="/surat/hapus/<?= $s['id_surat']; ?>">Hapus</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?= $this->endsection(); ?>