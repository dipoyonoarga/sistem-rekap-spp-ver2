<?php

$id_siswa = $_GET['id_siswa'];
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$no_telp = $_POST['no_telp'];

include '../databaseConn.php';
$sql = "UPDATE siswa SET nisn='$nisn', nis='$nis', nama='$nama', id_kelas='$id_kelas', no_telp='$no_telp' 
WHERE id_siswa='$id_siswa'";
$query = mysqli_query($conn, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=siswa");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=siswa');</script>";
}
