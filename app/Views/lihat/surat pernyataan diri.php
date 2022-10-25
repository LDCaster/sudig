<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

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

    <!-- judul surat -->
    <section class="judul">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <br><br><br><br>
                    <center>
                        <font size="5"><u><b>SURAT PERNYATAAN DIRI</b></u></font>
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
                            <td width="20%">Nama Lengkap</td>
                            <td width="3%">:</td>
                            <td width="77%"><?= $datasurat['isinama']; ?></td>
                        </tr>
                        <tr>
                            <td width="20%">Tempat, Tanggal/Lahir</td>
                            <td width="3%">:</td>
                            <td width="77%"><?= $datasurat['isilahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $datasurat['isijenis']; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?= $datasurat['isiagama']; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?= $datasurat['isipekerjaan']; ?></td>
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
                    <p></p>
                    <p><?= $datasurat['isiparagraf2']; ?></p>
                    <p></p>
                    <table width="100%">
                        <tr>
                            <td width="20%"><?= $datasurat['isiket']; ?></td>
                        </tr>
                        <tr>
                            <td><?= $datasurat['isiket2']; ?></td>
                        </tr>
                        <tr>
                            <td><?= $datasurat['isiket3']; ?></td>
                        </tr>
                        <tr>
                            <td><?= $datasurat['isiket4']; ?></td>
                        </tr>
                    </table>
                    <p></p>
                    <p><?= $datasurat['penutup']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-- pengesahan -->
    <section class="pengesah">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <p style="text-align: right; font-size: 17px;"><?= $datasurat['tempat']; ?>, <?php echo date('d F Y', strtotime($datasurat['tanggal'])); ?></p>
                    <h5 style="text-align: right; font-size: 17px;"> Yang Menyatakan&emsp;</h5>
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