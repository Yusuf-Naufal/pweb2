<head>
    <link rel="stylesheet" href="../style.css">
</head>

<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tmpt_lhr = $_POST['tmpt_lhr'];
            $jns_klmn = $_POST['jns_klmn'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tmpt_lhr, $jns_klmn, $agama, $alamat);

            if ($result) {
                header("location:/jobsheet5/mahasiswa");
            } else {
                header("location:/jobsheet5/editMahasiswa");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan!!";
    }
}
?>
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
    <div class="container">
        <div class="content">
            <table>
                <h3>Edit Data Mahasiswa</h3>
                <form action="" method="post">
                    <?php
                    foreach ($mahasiswaData as $d) {
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
                                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tmpt_lhr"
                                    value="<?php echo $d['tmpt_lhr'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                <select name="jns_klmn" id="" class="form-control">
                                    <option <?php if ($d['jns_klmn'] == 'Laki-Laki')
                                        echo 'selected' ?> value="Laki-Laki">Laki -
                                            Laki</option>
                                        <option <?php if ($d['jns_klmn'] == 'Perempuan')
                                        echo 'selected' ?> value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Agama</label>
                                    <select name="agama" id="" class="form-control" >
                                    <option <?php if ($d['agama'] == 'islam')
                                        echo 'selected' ?> value="Islam">Islam</option>
                                        <option <?php if ($d['agama'] == 'Kristen')
                                        echo 'selected' ?> value="Kristen">Kristen
                                        </option>
                                        <option <?php if ($d['agama'] == 'Katolik')
                                        echo 'selected' ?> value="Katolik">Katolik
                                        </option>
                                        <option <?php if ($d['agama'] == 'Hindu')
                                        echo 'selected' ?> value="Hindu">Hindu</option>
                                        <option <?php if ($d['agama'] == 'Budha')
                                        echo 'selected' ?> value="Budha">Budha</option>
                                        <option <?php if ($d['agama'] == 'Konhuchu')
                                        echo 'selected' ?> value="Konhuchu">Konhuchu
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" cols="30"
                                        rows="2"><?php echo $d['alamat'] ?></textarea>
                            </div>
                            <div>
                                <td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
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