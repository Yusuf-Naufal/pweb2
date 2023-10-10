<?php
include "../classes/database.php";
$db=new Database();

$aksi=$_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dosen($_POST['nidn'], $_POST['home_based'], $_POST['nama'],$_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'],$_POST['agama'], $_POST['alamat'], $_POST['kbk']);
    header("location:tampil_dosen.php");
}
else if ($aksi == "update"){
    $db->update($_POST['id'],$_POST['nidn'], $_POST['home_based'], $_POST['nama'],$_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'],$_POST['agama'], $_POST['alamat'], $_POST['kbk']);
    header("location:tampil_dosen.php");
}
else if ($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location: tampil_dosen.php");
}
?>