<?php
// Memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

// Instansiasi class database
$database = new Database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();


$jumlahDosen = mysqli_num_rows($dosen);
$jumlahMahasiswa = mysqli_num_rows($mahasiswa);
?>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container mt-5">
        <div class="row content">
            <div class="col-md-5 ">
                <!-- Kartu untuk Jumlah Mahasiswa -->
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Jumlah Mahasiswa</h1>
                        <?php echo "Jumlah data Mahasiswa: " . $jumlahMahasiswa;?>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5"  >
                <!-- Kartu untuk Jumlah Dosen -->
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Jumlah Dosen</h1>
                        <?php echo "Jumlah data Dosen: " . $jumlahDosen;?>
                    </div>
                </div>
            </div>
        </div>
    </div>