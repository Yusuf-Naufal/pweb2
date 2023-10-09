<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulasi dan Inheritance</title>
</head>
<body>
    <?php
    class Layangan{
        protected $bahan;
        protected $tali;

        public function Pembuatan($bahan){
            $this->bahan=$bahan;
        }
        public function getBahan(){
            return $this->bahan;
        }
        public function setTali($tali){
            $this->tali=$tali;
        }
        public function getTali(){
            return $this->tali;
        }
    }

    class Naga_Nagaan extends Layangan{
        private $panjang;

        public function Ukuran($panjang){
            $this->panjang=$panjang;
        }
        public function getUkuran(){
            return $this->panjang;
        }
    }
    $mainan = new Naga_Nagaan;
    $mainan->Ukuran(200);
    $mainan->Pembuatan("Kayu");
    $mainan->getTali();
    $mainan->setTali("Benang Kasur");

    //Pemanggilan
    echo "Layangan Naga-Nagaan terbuat dari bahan ".$mainan->getBahan()."<br>";
    echo "Layangan Ini memiliki Panjang : ".$mainan->getUkuran()."<br>";
    echo "Layangan ini menggunakan tali ".$mainan->getTali()."<br>";


    ?>
</body>
</html>