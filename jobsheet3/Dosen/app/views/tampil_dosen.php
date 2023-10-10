<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <?php
    //memanggil class database
    include '../classes/database.php';
    //instansisasi class database
    $db = new database;
    ?>

    <div style="table-container">
        <h3>Data Dosen</h3>
        <a type="button" class="btn btn-primary" href="input_dosen.php">Tambah Dosen +</a>

        <table style="margin-top:20;" class="table table-success table-striped table-bordered border-primary">
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Home Based</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>KBK</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($db->tampil_dosen() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        <?php echo $x['nidn'] ?>
                    </td>
                    <td>
                        <?php echo $x['home_based'] ?>
                    </td>
                    <td>
                        <?php echo $x['nama'] ?>
                    </td>
                    <td>
                        <?php echo $x['tempat_lahir'] ?>
                    </td>
                    <td>
                        <?php echo $x['tanggal_lahir'] ?>
                    </td>
                    <td>
                        <?php echo $x['jenis_kelamin'] ?>
                    </td>
                    <td>
                        <?php echo $x['agama'] ?>
                    </td>
                    <td>
                        <?php echo $x['alamat'] ?>
                    </td>
                    <td>
                        <?php echo $x['kbk'] ?>
                    </td>
                    <td>
                        <a type="button" class="btn btn-warning"
                            href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit </a>
                        <a type="button" class="btn btn-danger"
                            href="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus </a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>