<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-button-sp {
            width: 140px;
            height: 40px;
            margin: 2px;
            display: inline-block;
            text-align: center;

        }
    </style>
</head>

<body>
    <div class="container">

        <h5>Halaman Data Siswa</h5>
        <a href="?url=tambah-siswa" class="btn btn-primary custom-button-sp">Tambah Siswa</a>

        <hr>
        <table class="table table-striped table-bordered">
            <tr class="fw-bold">
                <td>No</td>
                <td>NISN</td>
                <td>NIS</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>No Telp</td>
                <td>Edit</td>
                <td>Hapus</td>
            </tr>


            <?php
            include '../databaseConn.php';
            $sql = "SELECT*FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas ORDER BY nama ASC";
            $query = mysqli_query($conn, $sql);
            $no = 1;
            foreach ($query as $data) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nisn'] ?></td>
                    <td><?= $data['nis'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nama_kelas'] ?></td>
                    <td><?= $data['no_telp'] ?></td>


                    <td>
                        <a href="?url=edit-siswa&id_siswa=<?= $data['id_siswa']  ?>" class="btn btn-warning">EDIT</a>
                    </td>
                    <td>
                        <a href="?url=hapus-siswa&id_siswa=<?= $data['id_siswa']  ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">HAPUS</a>
                    </td>
                </tr>
            <?php } ?>


        </table>
    </div>

</body>

</html>