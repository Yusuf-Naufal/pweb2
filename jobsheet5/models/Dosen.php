<?php

class Dosen{
    private $koneksi;
    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllDosen(){
        $query="SELECT * FROM dosen";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createDosen($nidn,$nama,$home_based,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        $query="INSERT INTO dosen (nidn,nama,home_based,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat) 
        Values ('$nidn','$nama','$home_based','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function getDosenById($id){
        $query ="SELECT * FROM dosen where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function updateDosen ($id,$nidn,$nama,$home_based,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        $query= "UPDATE dosen set nidn='$nidn', nama='$nama',home_based='$home_based',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function deleteDosen($id){
        $query = "DELETE FROM dosen WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }
        else {
            return false;
        }
    }
}