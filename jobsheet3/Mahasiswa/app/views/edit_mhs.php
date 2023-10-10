<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <?php
    include "../classes/database.php";
    $db = new Database();
    ?>

    <div class="container">
        <div class="content">
            <table>
                <h3>Edit Data Mahasiswa</h3>
                <form action="proses_mhs.php?aksi=update" method="post">
                    <?php
                    foreach ($db->edit($_GET['id']) as $d) {

                        ?>
                        <table>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                                <input class="form-control" type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                <input class="form-control" type="text" name="nim" value="<?php echo $d['nim'] ?>">

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="nama" value="<?php echo $d['nama'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" cols="30" rows="2"><?php echo $d['alamat'] ?></textarea>
                            </div>
                            <div>
                                <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
                            </div>
                        </table>
                        <?php
                    }
                    ?>
                </form>
            </table>
        </div>
    </div>
</body>

</html>