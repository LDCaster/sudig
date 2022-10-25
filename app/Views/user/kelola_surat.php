<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Surat</h1>
        </div>
        <div class="section-body">
            <div class="container kelola Surat-surat">
                <div class="row">
                    <h3>Aktivitas Surat User</h3>
                    <table class="table" id="kelola_surat" style="width: 100%; background-color: #fff;">
                        <thead style="text-align: center;">
                            <tr>
                                <th>No</th>
                                <th>Nama Surat</th>
                                <th>User</th>
                                <th>Dibuat</th>
                                <th>Diedit</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            <?php $i = 1; ?>
                            <?php foreach ($datasurat as $s) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $s['nm_jenis']; ?></td>
                                    <td><?= $s['username']; ?></td>
                                    <td><?= $s['created_at']; ?></td>
                                    <td><?= $s['updated_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                    <!-- <script>
                        $(document).ready(function() {
                            $('#kelola_surat').DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: '/surat/kelola_surat'
                            });
                        });
                    </script> -->
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>