<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'databaseConn.php';
$sql = "SELECT*FROM petugas WHERE username='$username' AND password='$password'";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['nama_petugas'] = $data['nama_petugas'];
    $_SESSION['jabatan'] = $data['jabatan'];

    if ($data['jabatan'] == 'admin') {
        header('Location:admin/admin.php');
    } else if ($data['jabatan'] == 'petugas') {
        header('Location:petugas/petugas.php');
    }
} else {
    echo "
    <script>
        alert('Login gagal, silakan coba lagi');
        window.location.assign('index.php');
    </script>";
}
