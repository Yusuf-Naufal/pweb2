<?php

class Database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_dosen()
    {
        $data = mysqli_query($this->koneksi, "Select * from dosen");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_dosen($nidn, $home_based, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $kbk)
    {
        mysqli_query($this->koneksi, "insert into dosen (nidn,home_based,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,kbk) values ('$nidn','$home_based','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat','$kbk')");
    }

    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$nidn,$home_based,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$kbk)
    {
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn',home_based='$home_based',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',kbk='$kbk' where id='$id'");

    }

    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where id ='$id'");
    }
}
?>