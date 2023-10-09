<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class dan Properti</title>
</head>
<body>
    <?php
    //Membuat Class 
    class mahasiswa{
        //Menuliskan property
        var $nim;
        var $nama;
        var $alamat;

        //Method untuk menampilkan nama
        function tampil_nama(){
            return "Nama Saya adalah Abda`u <br>";
        }
        function tampil_alamat(){
            return "Alamat Saya di Taman Patra Indah <br>";
        }
    }
    //membuat objek nama_mahasiswa
    $nama_mahasiswa=new mahasiswa();
    echo $nama_mahasiswa->tampil_nama();
    echo $nama_mahasiswa->tampil_alamat();

    //CLASS DOSEN
    Class Dosen {
        //Properti Class Dosen
        var $nama;
        var $nidn;
        var $prodi;
        //Method Class Dosen untuk memanggil nama
        function deskripsi_nama(){
            return "<br> Nama Saya adalah Yusuf Naufal Zuhdi";
        }
    }
    //membuat objek baru 
    $nama_dosen = new Dosen();
    echo $nama_dosen->deskripsi_nama();
    ?>
</body>
</html>