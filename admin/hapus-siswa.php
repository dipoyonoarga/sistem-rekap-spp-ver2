<?php

$id_siswa = $_GET['id_siswa'];

include '../databaseConn.php';
$sql = "DELETE FROM siswa WHERE id_siswa='$id_siswa'";
$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:?url=siswa");
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); 
    window.location.assign('?url=siswa');</script>";
}
