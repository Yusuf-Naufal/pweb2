<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct dan Destruct</title>
</head>

<body>
    <?php
    //Membuat Class 
    class mahasiswa
    {
        //Menuliskan property
        var $nim;
        var $nama;
        var $alamat;
        //Construct
        function __construct()
        {
            echo "Saya Mahasiswa Teknik Informatika<br>";
        }
        //Destruct
        function __destruct()
        {
            echo "Politeknik Negeri Cilacap";
        }
        //Method untuk menampilkan nama
        function tampil_nama()
        {
            return "Nama Saya adalah Abda`u <br>";
        }
        function tampil_alamat()
        {
            return "Alamat Saya di Jalan Rinjani <br>";
        }
        function tampil_mahasiswa()
        {
            return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah<br>";
        }
    }
    //membuat objek nama_mahasiswa
    $nama_mahasiswa = new mahasiswa();
    echo $nama_mahasiswa->tampil_nama();
    echo $nama_mahasiswa->tampil_alamat();
    echo $nama_mahasiswa->tampil_mahasiswa();
    ?>
</body>

</html>