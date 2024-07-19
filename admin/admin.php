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


        .custom-button {
            width: 122px;
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


        <a href="admin.php" class="btn btn-primary custom-button">Panduan</a>
        <a href="admin.php?url=kelas" class="btn btn-primary custom-button">Kelas</a>
        <a href="admin.php?url=siswa" class="btn btn-primary custom-button">Siswa</a>
        <a href="admin.php?url=spp" class="btn btn-primary custom-button">SPP</a>
        <a href="admin.php?url=tagihan" class="btn btn-primary custom-button">Tagihan</a>
        <a href="admin.php?url=pembayaran" class="btn btn-primary custom-button">Pembayaran</a>
        <a href="admin.php?url=laporan" class="btn btn-primary custom-button">laporan</a>
        <a href="admin.php?url=logout" class="btn btn-danger custom-button">Logout</a>




        <div class="card mt-3 alert-info">
            <div class="card-body">

                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h5>Instruksi Cara Menggunakan Sistem Rekap SPP untuk <b>BENDAHARA</b></h5>";
                    echo "Selamat datang di Sistem Rekap SPP SMPIT Darul Hikmah. Berikut adalah panduan singkat tentang bagaimana cara mengoperasikan sistem ini. Pada sistem ini terdapat tombol Panduan, SPP, Kelas, Siswa, Petugas, Pembayaran, Laporan, dan Logout. Saat ini Anda sedang berada di dalam menu Panduan. Menu ini menyediakan informasi singkat tentang cara mengoperasikan sistem. Anda dapat memilih menu lainnya sesuai dengan kebutuhan dengan memilih tombol tombol yang tersedia. Menu SPP, Kelas, Siswa, Petugas, dan Pembayaran akan memungkinkan Anda untuk dapat mengelola data SPP, Kelas, Siswa, Petugas, dan Pembayaran dengan mudah. Menu Laporan memungkinkan Anda untuk dapat mencetak laporan pembayaran. Ketika Anda telah selesai menggunakan sistem, lakukan Logout dengan memilih tombol Logout berwarna merah. Panduan lebih lanjut tentang cara mengoperasikan sistem ini dapat diakses pada file dokumentasi pengguna.";
                } else {
                    include $file . '.php';
                }
                ?>

            </div>
        </div>
    </div>








    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- MDBootstrap JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>