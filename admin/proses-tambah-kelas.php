<?php

$nama_kelas = $_POST['nama_kelas'];
$nama_walikelas = $_POST['nama_walikelas'];
$tahun_ajaran = $_POST['tahun_ajaran'];


include '../databaseConn.php';
$sql = "INSERT INTO kelas(nama_kelas,nama_walikelas,tahun_ajaran) VALUES('$nama_kelas','$nama_walikelas','$tahun_ajaran')";
$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:?url=kelas");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=kelas');</script>";
}
