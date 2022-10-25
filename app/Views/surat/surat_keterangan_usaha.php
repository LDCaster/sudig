<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header" style="background-color: #f9f9f9;">
            <h1>Surat Keterangan Usaha</h1>
        </div>
        <div class=" section-body">
            <!-- kalau error -->
            <div class="alert alert-danger error" role="alert" style="display: none;">
            </div>
            <!-- kalau berhasil -->
            <div class="alert alert-success sukses" role="alert" style="display: none;">
            </div>
            <div class="container">
                <form action="/simpansurat/s_suratkematian" method="POST" class="" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <!-- kop surat -->
                    <div class="row shadow-2 box mb-3">
                        <div class="col-md">
                            <h5>Kop Surat</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-1">
                                        <!-- nama instansi -->
                                        <label for="nama_instansi">Nama Instansi</label>
                                        <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" required placeholder="Contoh : Desa Konoha">
                                        <small id="nama_instansi-help" class="form-text text-muted">Isikan dengan nama instansi/Lembaga yang menerbitkan surat.</small>
                                    </div>
                                    <div class="form-group mb-1">
                                        <!-- jenis instansi -->
                                        <label for="jenis_instansi">Jenis Instansi</label>
                                        <input type="text" class="form-control" name="jenis_instansi" id="jenis_instansi" placeholder="Contoh : Ikatan Alumni / Pemerntah Kota Banda Aceh" required>
                                        <small id="jenis_instansi-help" class="form-text text-muted">Kolom ini
                                            akan ditampilkan di atas nama Instansi pada kop surat.</small>
                                    </div>
                                    <div class="form-group mb-1">
                                        <!-- Alamat -->
                                        <label for="kop_alamat">Alamat Instansi</label>
                                        <input type="text" class="form-control" name="kop_alamat" id="kop_alamat" placeholder="Contoh : Jl. Mawar No. 10 Jakarta Pusat." required>
                                        <small id="kop-alamat-help" class="form-text text-muted">Alamat sekretariat instansi.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-1">
                                        <!-- Telp/Hp instansi -->
                                        <label for="telp">Telp/Hp</label>
                                        <input type="text" class="form-control" name="telp" id="telp" placeholder="Contoh : 0888-0000-123" required>
                                        <small id="telp-help" class="form-text text-muted">Kontak telp/hp instansi.</small>
                                    </div>
                                    <div class="form-group mb-1">
                                        <!-- Website instansi -->
                                        <label for="website">Website Instansi</label>
                                        <input type="text" class="form-control" name="website" id="website" placeholder="Contoh : www.heroku.com">
                                        <small id="website-help" class="form-text text-muted">Kosongkan jika tidak ada.</small>
                                    </div>
                                    <div class="form-group mb-1">
                                        <!-- Logo -->
                                        <label for="logo">Logo</label>
                                        <div class="row align-items-center mx-1">
                                            <div class="" style="position: relative;">
                                                <img src="/assets/img/logo/default.png" class="img-thumbnail img-preview" style="height: 75px; width: 75px;">
                                                <input type="file" class="" name="logo" id="logo" onchange="previewImg()">
                                                <small id="logo-help" class="form-text text-muted">Logo Instansi.</small>
                                            </div>
                                            <div class="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end kop surat -->

                    <!-- tempat,tgl surat -->
                    <div class="row shadow-2 box mb-3">
                        <div class="col-md">
                            <h5>Tempat, Tanggal Surat</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-1">
                                        <!-- tempat surat -->
                                        <label for="tempat">Tempat Surat</label>
                                        <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Contoh : Pelaihari" required>
                                        <small id="tempat-help" class="form-text text-muted">Tempat diterbitkannya Surat.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-1">
                                        <!-- tanggal surat -->
                                        <label for="tanggal">Tanggal Surat</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Contoh : mm/dd/yyyy" required>
                                        <small id="tanggal-help" class="form-text text-muted">Waktu diterbitkannya surat. (Bulan/Tanggal/Tahun).</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tempat,tgl surat -->

                    <!-- no, lampiran surat -->
                    <div class="row shadow-2 box mb-3">
                        <div class="col-md">
                            <h5>Nomor Surat, Lampiran</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-1">
                                        <!-- nomor surat -->
                                        <label for="nomor">Nomor Surat</label>
                                        <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Contoh : 105/ABC/SLP/2021">
                                        <small id="nomor-help" class="form-text text-muted">Kosongkan jika belum tahu.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                        <textarea name="pembuka" id="pembuka" class="form-control" placeholder="Contoh : Dengan Hormat" required>Dengan Hormat, </textarea>
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
                                <label class="col-sm-2 col-form-label py-0">Paragraf 1
                                </label>
                                <div class="col-sm-10">
                                    <div class="isi-ul">
                                        <div class="form-group row mb-3">
                                            <textarea name="paragraf1" id="paragraf1" class="form-control" placeholder="Contoh : Dengan Hormat" required>Yang bertanda tangan di bawah ini selaku Kepala Desa . . . . ., Kecamatan . . . . ., Kabupaten . . . . . dengan ini menerangkan bahwa : </textarea>
                                            <div class="col-sm-9">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end paragraf 1 -->

                            <!-- isi pragraf 2 -->
                            <div class="row shadow-2 box mt-3">
                                <div class="col-md">
                                    <!-- paragraf 1 -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label py-0">Paragraf 2
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="isi-ul">
                                                <div class="form-group row mb-0">
                                                    <label for="isi_nama" class="col-sm-3 col-form-label">Nama</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="isi_nama" id="isi_nama" class="form-control  mb-3" placeholder="Tuliskan sesuatu" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <label for="isi_tgl_lahir" class="col-sm-3 col-form-label">Tempat, Tanggal/Lahir</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="tgl_lahir" id="isi_tgl_lahir" class="form-control  mb-3" placeholder="Tuliskan sesuatu" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <label for="isi_ktp" class="col-sm-3 col-form-label">No. KK/KTP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="isi_ktp" id="isi_ktp" class="form-control  mb-3" placeholder="Tuliskan sesuatu">
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
                                    <!-- end paragraf 2 -->

                                    <!-- paragraf 3 -->
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label py-0">Paragraf 3</label>
                                        <div class="col-sm-10">
                                            <div class="isi-ul">
                                                <div class="form-group row mb-0">
                                                    <textarea name="paragraf3" id="paragraf3" class="form-control" placeholder="Contoh : Dengan Hormat" required>Nama yang tersebut di atas adalah benar penduduk yang berdomisili di Desa . . . . ., Kecamatan . . . . ., Kabupaten . . . . . </textarea>
                                                    <div class="col-sm-9">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end paragraf 3 -->
                                    <!-- paragraf 4 -->
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label py-0">Paragraf 4</label>
                                        <div class="col-sm-10">
                                            <div class="isi-ul">
                                                <div class="form-group row mb-0">
                                                    <textarea name="paragraf4" id="paragraf4" class="form-control" placeholder="Contoh : Dengan Hormat" required>Berdasarkan pengamatan kami bahwa orang yang bersangkutan adalah benar memiliki usaha . . . . . di wilayah . . . . . . </textarea>
                                                    <div class="col-sm-9">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end paragraf 3 -->


                                </div>

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
                                                <textarea cols="10" name="penutup" id="penutup" class="form-control " placeholder="Contoh : Demikian Surat ini kami buat . . . " required>Demikian Surat Keterangan Usaha ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</textarea>
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
                                                    <label for="nama_pengesah">Kepala Desa</label>
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
                                        <div class="col-md-2">
                                            <label for="isi_jenis" class="col-sm-2 col-form-label py-0" style="opacity: 0;">Isi Jenis</label>
                                            <div class="col-sm-10">
                                                <textarea name="isi_jenis" id="isi_jenis" rows="3" class="form-control" required style="opacity: 0;">6</textarea>
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
                                            <button id="simpanSKematian" class="btn btn-primary btn-lg mt-2 btn-buat"><a href="<?= base_url('simpansurat/s_suratkematian'); ?>"></a> BUAT SURAT INI</button>
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