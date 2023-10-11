<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $tmpt_lhr=$_POST['tmpt_lhr'];
    $jns_klmn=$_POST['jns_klmn'];
    $agama=$_POST['agama'];
    $alamat=$_POST['alamat'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->createMahasiswa($nim,$nama,$tmpt_lhr,$jns_klmn,$agama,$alamat);

    if($result){
        header("location:mahasiswa");
    }
    else {
        header("location:tambahMahasiswa");
    }
}