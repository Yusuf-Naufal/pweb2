<?php

class Mahasiswa{
    private $koneksi;
    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllMahasiswa(){
        $query="SELECT * FROM mahasiswa";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createMahasiswa($nim,$nama,$tmpt_lhr,$jns_klmn,$agama,$alamat){
        $query="INSERT INTO mahasiswa (nim,nama,tmpt_lhr,jns_klmn,agama,alamat) 
        Values ('$nim','$nama','$tmpt_lhr','$jns_klmn','$agama','$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function getMahasiswaById($id){
        $query ="SELECT * FROM mahasiswa where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function updateMahasiswa ($id,$nim,$nama,$tmpt_lhr,$jns_klmn,$agama,$alamat){
        $query= "UPDATE mahasiswa set nim='$nim', nama='$nama',tmpt_lhr='$tmpt_lhr',jns_klmn='$jns_klmn',agama='$agama',alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function deleteMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }
        else {
            return false;
        }


    }
}