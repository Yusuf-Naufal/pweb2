<head>
    <link rel="stylesheet" href="../style.css">
</head>

<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {

            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $home_based = $_POST['home_based'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id,$nidn,$nama,$home_based,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);

            if ($result) {
                header("location:/jobsheet5/dosen");
            } else {
                header("location:/jobsheet5/editDosen");
            }
        }
    } else {
        echo "Dosen tidak ditemukan!!";
    }
}
?>
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
            <table>
                <h3>Edit Data Dosen</h3>
                <form action="" method="post">
                    <?php
                    foreach ($dosenData as $d) {
                        ?>
                        <table>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NIDN</label>
                                <input class="form-control" type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                <input class="form-control" type="text" name="nidn" value="<?php echo $d['nidn'] ?>">

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="nama" value="<?php echo $d['nama'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Home Based</label>
                                <input class="form-control" type="text" name="home_based"
                                    value="<?php echo $d['home_based'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir"
                                    value="<?php echo $d['tempat_lahir'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir"
                                    value="<?php echo $d['tanggal_lahir'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option <?php if ($d['jenis_kelamin'] == 'Laki - Laki')
                                        echo 'selected' ?> value="Laki - Laki">Laki -
                                            Laki</option>
                                        <option <?php if ($d['jenis_kelamin'] == 'Perempuan')
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