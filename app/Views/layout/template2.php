<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('logo.png') ?>">
    <title><?= $title; ?></title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/fontawesome/css/all.min.css">

    <!-- DataTables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <!-- CSS Libraries -->
    <!-- <link rel="stylesheet" href="http://localhost:8080/assets/modules/jqvmap/dist/jqvmap.min.css"> -->
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/summernote/summernote-bs4.css">
    <!-- <link rel="stylesheet" href="http://localhost:8080/assets/modules/owlcarousel2/dist/assetsc/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="http://localhost:8080/assets/modules/owlcarousel2/dist/assetsc/owl.theme.default.min.css"> -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="http://localhost:8080/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost:8080/assets/css/components.css">

    <!-- my css -->
    <link rel="stylesheet" href="http://localhost:8080/assets/css/mycss.css">

    <!-- Start GA -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script> -->
    <!-- /END GA -->
    <script type="text/javascript" src="http://localhost:8080/assets/js/signature.js"></script>
</head>

<body style="background-color: #f9f9f9;">

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- <div class="navbar-bg"></div> -->

            <!-- Top Bar Dashboard -->
            <?= $this->include('layout/topbar'); ?>

            <!-- Sidebar Dashboard -->
            <?= $this->include('layout/sidebar'); ?>

            <!-- Section Main -->
            <?= $this->renderSection('content2'); ?>

            <!-- footer -->
            <?= $this->include('layout/footer'); ?>

            <!-- General JS Scripts -->
            <script src="http://localhost:8080/assets/modules/jquery.min.js"></script>
            <!-- <script src="http://localhost:8080/assets/modules/popper.js"></script>
            <script src="http://localhost:8080/assets/modules/tooltip.js"></script> -->
            <script src="http://localhost:8080/assets/modules/bootstrap/js/bootstrap.min.js"></script>
            <script src="http://localhost:8080/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
            <script src="http://localhost:8080/assets/modules/moment.min.js"></script>
            <script src="http://localhost:8080/assets/js/stisla.js"></script>

            <!-- DataTables JS -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js">

            <!-- JS Libraies -->
            <script src="http://localhost:8080/assets/modules/jquery.sparkline.min.js"></script>
            <script src="http://localhost:8080/assets/modules/chart.min.js"></script>
            <!-- <script src="http://localhost:8080/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script> -->
            <!-- <script src="http://localhost:8080/assets/modules/summernote/summernote-bs4.js"></script> -->
            <!-- <script src="http://localhost:8080/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script> -->

            <!-- Page Specific JS File -->
            <script src="http://localhost:8080/assets/js/page/index.js"></script>

            <!-- Template JS File -->
            <script src="http://localhost:8080/assets/js/scripts.js"></script>
            <script src="http://localhost:8080/assets/js/custom.js"></script>


            <script>
                function previewImg() {
                    const logo = document.querySelector('#logo');
                    const imgPreview = document.querySelector('.img-preview');

                    const fileLogo = new FileReader();
                    fileLogo.readAsDataURL(logo.files[0]);

                    fileLogo.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            </script>

</body>

</html>