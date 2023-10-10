<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    //memanggil class database
    include '../classes/database.php';
    //instansisasi class database
    $db = new database;
    ?>

    <div style="padding-left: 20px; padding-right: 20px; width:80%; margin:auto; margin-top: 20px;">
    <h3>Data Mahasiswa</h3>
    <a type="button" class="btn btn-primary" href="input_mhs.php">Tambah Mahasiswa +</a>

        <table style="margin-top:20;" class="table table-success table-striped table-bordered border-primary">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($db->tampil_mahasiswa() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        <?php echo $x['nim'] ?>
                    </td>
                    <td>
                        <?php echo $x['nama'] ?>
                    </td>
                    <td>
                        <?php echo $x['alamat'] ?>
                    </td>
                    <td>
                        <a type="button" class="btn btn-success" href="edit_mhs.php?id=<?php echo $x ['id']; ?>&aksi=edit">Edit </a>
                        <a type="button" class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x ['id']; ?>&aksi=hapus">Hapus </a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>

</body>

</html>