<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title; ?></title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/owlcarousel2/dist/assetsc/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost:8080/assets/modules/owlcarousel2/dist/assetsc/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="http://localhost:8080/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost:8080/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content1'); ?>

    <!-- General JS Scripts -->
    <script src="http://localhost:8080/assets/modules/jquery.min.js"></script>
    <script src="http://localhost:8080/assets/modules/popper.js"></script>
    <script src="http://localhost:8080/assets/modules/tooltip.js"></script>
    <script src="http://localhost:8080/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost:8080/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="http://localhost:8080/assets/modules/moment.min.js"></script>
    <script src="http://localhost:8080/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="http://localhost:8080/assets/modules/jquery.sparkline.min.js"></script>
    <script src="http://localhost:8080/assets/modules/chart.min.js"></script>
    <script src="http://localhost:8080/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="http://localhost:8080/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="http://localhost:8080/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="http://localhost:8080/assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="http://localhost:8080/assets/js/scripts.js"></script>
    <script src="http://localhost:8080/assets/js/custom.js"></script>

</body>

</html>