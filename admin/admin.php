<?php

session_start();
if ($_SESSION['jabatan'] != 'admin') {
    echo "<script>
    alert('Anda tidak memiliki jabatan yang sesuai untuk mengakses sesi ini');
    window.location.assign('../index.php');
    </script>";
}

if (empty($_SESSION['id_petugas'])) {
    echo "<script>
        alert('Mohon lakukan signin pada halaman login');
        window.location.assign('../index.php');
        </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Sistem Rekap SPP</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- MDBootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }

        .card {
            background-color: #1e1e1e;
        }

        .custom-button {
            width: 120px;
            height: 40px;
            margin: 2px;
            display: inline-block;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h3>Sistem Rekap SPP</h3>
        <div class="alert alert-info">
            Anda login sebagai <b>PETUGAS</b> sistem rekap SPP
        </div>

        <a href="admin.php" class="btn btn-primary custom-button">Petugas</a>
        <a href="admin.php?url=spp" class="btn btn-primary custom-button">Kelas</a>
        <a href="admin.php?url=kelas" class="btn btn-primary custom-button">Siswa</a>
        <a href="admin.php?url=siswa" class="btn btn-primary custom-button">Siswa</a>
        <a href="admin.php?url=petugas" class="btn btn-primary custom-button">SPP</a>
        <a href="admin.php?url=pembayaran" class="btn btn-primary custom-button">Tagihan</a>
        <a href="admin.php?url=pembayaran" class="btn btn-primary custom-button">Pembayaran</a>
        <a href="admin.php?url=laporan" class="btn btn-primary custom-button">laporan</a>
        <a href="admin.php?url=logout" class="btn btn-primary custom-button">Logout</a>


        <?php
        $file = @$_GET['url'];
        if (empty($file)) {
            echo "<br></br>";
            echo "<h4>Selamat Datang di Halaman Petugas</h4>";
        } else {
            include $file . '.php';
        }
        ?>








        <!-- Bootstrap JS -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- MDBootstrap JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>