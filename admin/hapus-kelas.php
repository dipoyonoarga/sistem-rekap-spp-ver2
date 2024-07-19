<?php


$id_kelas = $_GET['id_kelas'];


include '../databaseConn.php';
$sql = "DELETE FROM kelas WHERE id_kelas ='$id_kelas'";

$query = mysqli_query($conn, $sql);


if ($query) {
    header("Location:?url=kelas");
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); 
    window.location.assign('?url=spp');</script>";
}
