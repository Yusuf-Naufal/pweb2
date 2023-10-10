<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <?php
            include "../classes/database.php";
            $db = new Database();
            ?>

            <h3>Edit Data Dosen</h3>
            <form action="proses_dosen.php?aksi=update" method="post">
                <?php
                foreach ($db->edit($_GET['id']) as $d) {

                    ?>
                    <table>
                        <tr>
                            <td>NIDN</td>
                            <td>:</td>
                            <td><input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                <input type="text" name="nidn" value="<?php echo $d['nidn'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Home Based</td>
                            <td>:</td>
                            <td><input type="text" name="home_based" value="<?php echo $d['home_based'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-align: center">Agama</td>
                            <td>:</td>
                            <td><input type="text" name="agama" value="<?php echo $d['agama'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alamat" cols="30" rows="2"><?php echo $d['alamat'] ?></textarea></td>
                        </tr>
                        <tr>
                            <td>KBK</td>
                            <td>:</td>
                            <td><input type="text" name="kbk" value="<?php echo $d['kbk'] ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-success">Simpan</button></td>
                        </tr>
                    </table>
                    <?php
                }
                ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>