<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Surat Pernyataan Diri</h1>
        </div>
        <div class=" section-body">
            <!-- kalau error -->
            <div class="alert alert-danger error" role="alert" style="display: none;">
            </div>
            <!-- kalau berhasil -->
            <div class="alert alert-success sukses" role="alert" style="display: none;">
            </div>
            <div class="container">
                <form action="/simpansurat/s_suratpernyataandiri" method="POST" class="" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <!-- tempat,tgl surat -->
                    <div class="row shadow-2 box mb-3">
                        <div class="col-md">
                            <h5>Tempat, Tanggal Surat</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-1">
                                        <!-- tempat surat -->
                                        <label for="tempat">Tempat Surat</label>
                                        <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Contoh : Pelaihari" autofocus>
                                        <small id="tempat-help" class="form-text text-muted">Tempat diterbitkannya Surat.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-1">
                                        <!-- tanggal surat -->
                                        <label for="tanggal">Tanggal Surat</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Contoh : mm/dd/yyyy">
                                        <small id="tanggal-help" class="form-text text-muted">Waktu diterbitkannya surat. (Bulan/Tanggal/Tahun).</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tempat,tgl surat -->

                    <!-- Pembuka surat -->
                    <div class="row shadow-2 box mb-3">
                        <div class="col-md">
                            <h5>Salam Pembuka</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-1">
                                        <!-- pembuka surat -->
                                        <textarea name="pembuka" id="pembuka" class="form-control" placeholder="Contoh : Dengan Hormat" required>Yang bertanda tangan dibawah ini :</textarea>
                                        <small id="pembuka-help" class="form-text text-muted">.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end pembuka surat -->

                    <!-- isi surat -->
                    <div class="row shadow-2 box mt-3">
                        <div class="col-md">
                            <h5>Isi Surat</h5>
                            <!-- paragraf 1 -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label py-0">Paragraf 1</label>
                                <div class="col-sm-10">
                                    <div class="isi-ul">
                                        <div class="form-group row mb-0">
                                            <label for="isi_nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="isi_nama" id="isi_nama" class="form-control  mb-3" placeholder="Tuliskan sesuatu" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="lahir" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="lahir" class="form-control  mb-3" placeholder="Tuliskan sesuatu" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="isi_jensikelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="isi_jensikelamin" class="form-control  mb-3" placeholder="Tuliskan sesuatu" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="isi_agama" class="col-sm-3 col-form-label">Agama</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="isi_agama" id="isi_agama" class="form-control  mb-3" placeholder="Tuliskan sesuatu">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="isi_pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="isi_pekerjaan" id="isi_pekerjaan" class="form-control  mb-3" placeholder="Tuliskan sesuatu">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="isi_alamat" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="isi_alamat" id="isi_alamat" class="form-control  mb-3" placeholder="Tuliskan sesuatu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end paragraf 1 -->

                            <!-- paragraf 2 -->
                            <div class="form-group row">
                                <label for="isi_paragrafkedua" class="col-sm-2 col-form-label py-0">Paragraf 2</label>
                                <div class="col-sm-10">
                                    <textarea name="isi_paragrafkedua" id="isi_paragrafkedua" rows="3" class="form-control" required>Dengan ini menyatakan bahwa saya : :</textarea>
                                </div>
                            </div>
                            <!-- end paragraf 2 -->
                            <!-- paragraf 3 -->
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label py-0">Paragraf 3</label>
                                <div class="col-sm-10">
                                    <div class="isi-ul">
                                        <div class="form-group row mb-0">
                                            <label for="keterangan_satu" class="col-sm-3 col-form-label">Keterangan 1</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="keterangan_satu" id="keterangan_satu" class="form-control  mb-3" placeholder="Tuliskan sesuatu" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="keterangan_dua" class="col-sm-3 col-form-label">Keterangan 2</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="keterangan_dua" id="keterangan_dua" class="form-control  mb-3" placeholder="Tuliskan sesuatu" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="keterangan_tiga" class="col-sm-3 col-form-label">Keterangan 3</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="keterangan_tiga" id="keterangan_tiga" class="form-control  mb-3" placeholder="Tuliskan sesuatu">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="keterangan_empat" class="col-sm-3 col-form-label">Keterangan 4</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="keterangan_empat" id="keterangan_empat" class="form-control  mb-3" placeholder="Tuliskan sesuatu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end paragraf 3 -->
                            </div>
                        </div>
                        <!-- end isi surat -->


                    </div>
                    <!-- end isi surat -->

                    <!-- Salam penutup -->
                    <div class="row shadow-2 box mb-3">
                        <div class="col-md">
                            <h5>Salam Penutup</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-1">
                                        <!-- salam penutup -->
                                        <textarea cols="10" name="penutup" id="penutup" class="form-control " placeholder="Contoh : Demikian Surat ini kami buat . . . " required>Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dengan penuh kesadaran, tanpa paksaan dan tekanan dari pihak manapun. Apabila dikemudian hari terdapat sesuatu yang tidak sesuai dengan isi pernyataan ini, maka saya bersedia mendapatkan sanksi sesuai hukum yang berlaku.</textarea>
                                        <small id="penutup-help" class="form-text text-muted">.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end salam penutup -->

                    <!-- pengesahan surat -->
                    <div class="row shadow-2 box mt-3">
                        <div class="col-md">
                            <h5>Pengesahan</h5>
                            <div class="row">
                                <!-- pengesahan item -->
                                <div class="col-md-4">
                                    <div class="pengesahan-item">
                                        <label for="" class="label text-center w-100">Tertanda :</label>
                                        <div class="form-group">
                                            <label for="nama_pengesah">Yang menyatakan</label>
                                            <input type="text" name="nama_pengesah" id="nama_pengesah" class="form-control  mb-2" placeholder="Tulis nama disini" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end pengesahan surat -->

                    <!-- submit surat -->

                    <!-- checkbox -->
                    <div class="row shadow-2 box" style="margin-bottom: -50px;">
                        <div class="col-md">
                            <div class="row">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-2">
                                    <label for="isi_jenis" class="col-sm-2 col-form-label py-0" style="opacity: 0;">Isi Jenis</label>
                                    <div class="col-sm-10">
                                        <textarea name="isi_jenis" id="isi_jenis" rows="3" class="form-control" required style="opacity: 0;">1</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="user" class="col-sm-2 col-form-label py-0" style="opacity: 0;">user</label>
                                    <div class="col-sm-10">
                                        <textarea name="user" id="user" rows="3" class="form-control" required style="opacity: 0;"><?php echo user_id() ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end checkbox -->


                    <div class="row shadow-2 box">
                        <div class="col-md">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?= base_url('daftar_surat'); ?>" class="btn btn-danger btn-lg mt-2">Kembali</a>
                                    <button id="simpanSPernyataanDiri" class="btn btn-primary btn-lg mt-2 btn-buat">BUAT SURAT INI</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end submit surat -->
                </form>




            </div>
    </section>
</div>
<?= $this->endsection(); ?>