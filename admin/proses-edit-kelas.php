<?php

$nama_kelas = $_POST['nama_kelas'];
$nama_walikelas = $_POST['nama_walikelas'];
$tahun_ajaran = $_POST['tahun_ajaran'];


$id_kelas = $_GET['id_kelas'];


include '../databaseConn.php';
$sql = "UPDATE kelas SET nama_kelas='$nama_kelas', nama_walikelas='$nama_walikelas', tahun_ajaran='$tahun_ajaran' 
WHERE id_kelas ='$id_kelas'";
$query = mysqli_query($conn, $sql);


if ($query) {
    header("Location:?url=kelas");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=kelas');</script>";
}
