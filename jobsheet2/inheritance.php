<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
    Class Manusia{
        public $nama_saya;

        function panggil_nama($saya){
            $this->nama_saya=$saya; 
        }
    }
    //Class Turunan (Subclass) dari class Manusia
    class Mahasiswa extends Manusia{
        public $nama_mahasiswa;

        function panggil_mahasiswa($mahasiswa){
            $this->nama_mahasiswa=$mahasiswa;
        }
    }
    //instansiasi class mahasiswa 
    $informatika = new Mahasiswa();
    echo $informatika->panggil_nama("Yusuf");
    echo $informatika->panggil_mahasiswa("Naufal");

    //Menampilkan isi Properti 
    echo "Nama Depan Saya : ".$informatika->nama_saya."<br>";
    echo "Nama Belakang Saya : ".$informatika->nama_mahasiswa."<br>";

    ?>
</body>
</html>