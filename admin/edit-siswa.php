<?php

$id_siswa = $_GET['id_siswa'];
include '../databaseConn.php';
$sql = "SELECT*FROM siswa, kelas WHERE siswa.id_kelas=kelas.id_kelas AND id_siswa = '$id_siswa'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Data Siswa.</h5>
<a href="?url=siswa" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-edit-siswa&id_siswa=<?= $id_siswa; ?>">



    <input value="<?= $data['id_siswa'] ?>" readonly type="hidden" name="id_siswa" class="form-control" required>




    <div class="form-group mb-2">
        <label>NISN</label>
        <input value="<?= $data['nisn'] ?>" type="text" name="nisn" class="form-control" maxlength="11" required autocomplete="off">
    </div>

    <div class="form-group mb-2">
        <label>NIS</label>
        <input value="<?= $data['nis'] ?>" type="text" name="nis" class="form-control" maxlength="8" required autocomplete="off">
    </div>

    <div class="form-group mb-2">
        <label>Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" class="form-control" maxlength="35" required autocomplete="off">
    </div>

    <div class="form-group mb-2">
        <label>Kelas</label>
        <select name="id_kelas" class="form-control" required autocomplete="off">
            <option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas'] ?></option>

            <?php
            include '../databaseConn.php';
            $kelas = mysqli_query($conn, "SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach ($kelas as $data_kelas) {
            ?>

                <option value="<?= $data_kelas['id_kelas'] ?>"><?= $data_kelas['nama_kelas']; ?></option>
            <?php  } ?>
        </select>
    </div>

    <div class="form-group mb-2">
        <label>No Telp</label>
        <input value="<?= $data['no_telp'] ?>" type="text" name="no_telp" class="form-control" maxlength="13" required autocomplete="off">
    </div>










    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>