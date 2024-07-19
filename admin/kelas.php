<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Kelas</title>
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

        <h5>Halaman Data Kelas</h5>
        <a href="?url=tambah-kelas" class="btn btn-primary custom-button-sp">Tambah Kelas</a>

        <hr>
        <table class="table table-striped table-bordered">
            <tr class="fw-bold">
                <td>Nama Kelas</td>
                <td>Wali Kelas</td>
                <td>Tahun Ajaran</td>
                <td>Edit</td>
                <td>Hapus</td>
            </tr>


            <?php
            include '../databaseConn.php';
            $sql = "SELECT*FROM kelas ORDER BY id_kelas DESC";
            $query = mysqli_query($conn, $sql);
            foreach ($query as $data) { ?>
                <tr>
                    <td><?= $data['nama_kelas'] ?></td>
                    <td><?= $data['nama_walikelas'] ?></td>
                    <td><?= $data['tahun_ajaran'] ?></td>

                    <td>
                        <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas']  ?>" class="btn btn-warning">EDIT</a>
                    </td>
                    <td>
                        <a href="?url=hapus-kelas&id_kelas=<?= $data['id_kelas']  ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">HAPUS</a>
                    </td>
                </tr>
            <?php } ?>


        </table>
    </div>

</body>

</html>