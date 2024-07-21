<h5>Halaman Tambah Data siswa</h5>
<a href="?url=siswa" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-siswa">
    <div class="form-group mb-2">
        <label>NISN</label>
        <input type="text" name="nisn" class="form-control" autocomplete="off" maxlength="11" required>
    </div>
    <div class="form-group mb-2">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" autocomplete="off" maxlength="8" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" autocomplete="off" maxlength="35" required>
    </div>




    <div class="form-group mb-2">
        <label>Kelas</label>
        <select name="id_kelas" class="form-control" required autocomplete="off">
            <option value="">Pilih Kelas</option>

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
        <input type="text" name="no_telp" class="form-control" autocomplete="off" maxlength="13" required>
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>