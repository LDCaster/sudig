<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- my css -->
    <!-- <link rel="stylesheet" href="http://localhost:8080/assets/css/mycss.css"> -->
    <title><?= $title; ?></title>
</head>

<body>

    <?php $pdf = false;
    if (strpos(current_url(), "lihat")) {
        $pdf = true;
    ?>
        <a target="submit" class="btn btn-warning" href="/cetak/<?= $datasurat['nm_jenis']; ?>">Export PDF</a>
        <a target="submit" class="btn btn-info" href="<?= base_url('dashboard'); ?>">Kembali</a>
    <?php }
    if ($pdf == false) {
    ?>
    <?php } ?>
    <!-- kop surat -->
    <section class="kop">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img style="float: left;" src="/assets/img/logo/<?= $datasurat['kop_img']; ?>" height="100px">
                </div>
                <div class="col-md-5" style="margin-left: -20px;">
                    <center>
                        <h4 style="text-transform: uppercase; line-height: 70%;"><?= $datasurat['kop_judul2']; ?></h4>
                        <h2 style="text-transform: uppercase; line-height: 70%;"><?= $datasurat['kop_judul']; ?></h2>
                        <p style="line-height: 70%;">Alamat : <?= $datasurat['kop_alamat']; ?> Telp/Hp : <?= $datasurat['kop_telp']; ?> </p>
                        <p style="line-height: 50%;" class="mb-1">Website : <?= $datasurat['kop_website']; ?></p>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <!-- tanggal surat -->
    <section class="tanggal_surat">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <hr size="3" height="1px" color="black">
                    <p style="text-align: right; font-size: 17px;"><?= $datasurat['tempat']; ?>, <?php echo date('d F Y', strtotime($datasurat['tanggal'])); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- judul surat -->
    <section class="judul">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <center>
                        <font size="5"><u><b>SURAT KETERANGAN KEMATIAN</b></u></font>
                        <br /><b> Nomor: <?= $datasurat['nosurat']; ?></b>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <!-- isi paragraf pertama -->
    <section class="paragraf_pertama">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <br><br>
                    <p><?= $datasurat['pembuka']; ?></p>
                    <table width="100%">
                        <tr>
                            <td width="20%">Nama</td>
                            <td width="3%">:</td>
                            <td width="77%"><?= $datasurat['isinama']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $datasurat['isijenis']; ?></td>
                        </tr>
                        <tr>
                            <td>No. KK/KTP</td>
                            <td>:</td>
                            <td><?= $datasurat['isiktp']; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?= $datasurat['isipekerjaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?= $datasurat['isiagama']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $datasurat['isialamat']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- isi paragraf kedua dan ketiga-->
    <section class="paragraf_kedua_ketiga">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <p><?= $datasurat['isiparagraf2']; ?></p>
                    <table width="100%">
                        <tr>
                            <td width="20%">Hari/Tanggal</td>
                            <td width="3%">:</td>
                            <td width="77%"><?php echo date('d F Y', strtotime($datasurat['isitanggal'])); ?></td>
                        </tr>
                        <tr>
                            <td>Tempat</td>
                            <td>:</td>
                            <td><?= $datasurat['isitempat']; ?></td>
                        </tr>
                        <tr>
                            <td>Dikarenakan Sebab</td>
                            <td>:</td>
                            <td><?= $datasurat['isiket']; ?></td>
                        </tr>
                    </table>
                    <p><?= $datasurat['penutup']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- pengesahan -->
    <section class="pengesah">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <p style="text-align: right; font-size: 17px;"><?= $datasurat['tempat']; ?>, <?php echo date('d F Y', strtotime($datasurat['tanggal'])); ?></p>
                    <h5 style="text-align: right; font-size: 17px;">Kepala Desa &emsp;&emsp;</h5>
                    <br>
                    <br><br>
                    <p style="text-align: right; font-size: 17px;"><b>( <u><?= $datasurat['nmpengesah']; ?></u> )&emsp;&emsp;&emsp;&nbsp;</b></p>
                </div>
            </div>
        </div>
    </section>


    <script>
        // window.print();
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>

<