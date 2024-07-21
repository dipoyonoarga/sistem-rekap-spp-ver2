<?php

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$no_telp = $_POST['no_telp'];

include '../databaseConn.php';
$sql = "INSERT INTO siswa(nisn,nis,nama,id_kelas,no_telp) VALUES('$nisn','$nis','$nama'
,'$id_kelas','$no_telp' )";
$query = mysqli_query($conn, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=siswa");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=siswa');</script>";
}
