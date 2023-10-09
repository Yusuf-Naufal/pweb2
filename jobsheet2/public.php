<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkapsulasi</title>
</head>
<body>
    <?php
    //Membuat Class Mahasiswa 
    class Mahasiswa{
        //Properti Public dan Private
        public $nama;
        private $nim = 220302047;
        //Membuat public method 
        public function tampilkan_nama(){
            return "Nama Saya Yusuf Naufal Zuhdi<br>";
        }
        public  function tampilkan_nim(){
            return "NIM saya ".$this->nim."<br>";
        }
    }
    //instansiasi objek mahasiswa kedalam variabel mahasiswa
    $mahasiswa = new Mahasiswa();
    //Memanggil method tampilkan_nama
    echo $mahasiswa->tampilkan_nama();
    echo $mahasiswa->tampilkan_nim();
    //instansiasi objek nim
    $nim = new Mahasiswa();
    //memanggil protected fungsi yang memiliki akses protected
    echo $nim->tampilkan_nim();


    ?>
</body>
</html>