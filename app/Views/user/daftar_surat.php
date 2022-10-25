<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Daftar Surat</h1>
        </div>
        <div class="section-body">
            <div class="container list-surat">
                <h3>Surat Umum</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <!-- < ?php foreach ($datasurat as $surat) : ?> -->
                            <li><a href="<?= base_url('surat_pernyataan_diri'); ?>">Surat Pernyataan Diri</a></li>
                            <li><a href="">Surat Keterangan Penghasilan Orang Tua</a></li>
                            <li><a href="">Surat Pernyataan Cerai</a></li>
                            <!-- < ?php endforeach; ?> -->
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><a href="<?= base_url('surat_kematian'); ?>">Surat Kematian</a></li>
                            <li><a href="">Surat Permohonan Pemblokiran Rekening Bank</a></li>
                            <!-- <li><a href="">Surat Pernyataan Diri</a> </li>
                            <li><a href="">Surat Keterangan Penghasilan Orang Tua</a></li>
                            <li><a href="">Surat Pernyataan Cerai</a></li>
                            <li><a href="">Surat Kematian</a></li>
                            <li><a href="">Surat Permohonan Pemblokiran Rekening Bank</a></li> -->
                        </ul>
                    </div>
                </div>

                <h3>Surat Bisnis dan Pekerjaan</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><a href="<?= base_url('surat_keterangan_usaha'); ?>">Surat Keterangan Usaha (SKU)</a> </li>
                            <li><a href="">Surat Perjanjian Karyawan Tidak Mengulangi Kesalahan</a></li>
                            <li><a href="">Surat Permohonan Izin Cuti Kerja</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><a href="">Surat Pengalihan Hak Cipta</a></li>
                            <li><a href="">Surat Peringatan (SP)</a></li>
                            <!-- <li><a href="">Surat Pernyataan Diri</a> </li>
                            <li><a href="">Surat Keterangan Penghasilan Orang Tua</a></li>
                            <li><a href="">Surat Pernyataan Cerai</a></li>
                            <li><a href="">Surat Kematian</a></li>
                            <li><a href="">Surat Permohonan Pemblokiran Rekening Bank</a></li> -->
                        </ul>
                    </div>
                </div>

                <h3>Surat Sekolah & Kampus</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><a href="">Surat Undangan Rapat Sekolah</a> </li>
                            <li><a href="">Surat Permohonan Dana Kegiatan</a></li>
                            <li><a href="">Surat Keterangan Penghasilan Orang Tua</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><a href="">Surat Keterangan Aktif Sekolah</a></li>
                            <li><a href="">Surat Peringatan (SP)</a></li>
                            <!-- <li><a href="">Surat Pernyataan Diri</a> </li>
                            <li><a href="">Surat Keterangan Penghasilan Orang Tua</a></li>
                            <li><a href="">Surat Pernyataan Cerai</a></li>
                            <li><a href="">Surat Kematian</a></li>
                            <li><a href="">Surat Permohonan Pemblokiran Rekening Bank</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>