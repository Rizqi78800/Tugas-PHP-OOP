<?php
    class Elektronik{
        public $jenis;
        protected $merek;
        private $serialNumber;

        function __construct($merek,$serialNumber){
            $this->merek = $merek;
            $this->serialNumber = $serialNumber;
        }

        function __destruct() {
            echo "{$this->jenis} merek {$this->merek} sangat populer dikalangan masyarakat";
        }

        function setElektronik($jenis){
            $this->jenis = $jenis;
        }

        function getElektronik(){
            return "Elektronik telah didapatkan";
        }

        function describe(){
            echo"<br>Jenis: {$this->jenis}<br>Merek: {$this->merek}<br>Serial Number: {$this->serialNumber}<br>";
        }
    }

    class Televisi extends Elektronik{
        private $ukuranLayar;

        function __construct($merek,$serialNumber){
            parent:: __construct($merek,$serialNumber);
        }


        function __destruct(){
            echo "Televisi LED merek {$this->merek} dengan ukuran layar {$this->ukuranLayar} inch cukup luas untuk dinikmati bersama keluarga besar.<br>";
        }

        function setTelevisi($jenis,$ukuranLayar){
            $this->jenis = $jenis;
            $this->ukuranLayar = $ukuranLayar;
        }

        function getTelevisi(){
            return "Televisi telah didapatkan";
        }
    }


    $elektronik = new Elektronik("Sanken",87609);    
    $elektronik->setElektronik("Mesin Cuci");
    echo "{$elektronik->getElektronik()}";
    $elektronik->describe();

    echo"<br>";

    $televisi = new Televisi ("Panasonic",50723);
    $televisi->setTelevisi("Televisi LED",90);
    echo "{$televisi->getTelevisi()}";
    $televisi->describe();

    echo"<br>";

?>