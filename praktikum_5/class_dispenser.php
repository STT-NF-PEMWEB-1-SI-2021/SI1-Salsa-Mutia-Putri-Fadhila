<?php
    class Dispenser{
        public $volume;
        public $hargaSegelas;
        public $volumeGelas;
        public $namaMinuman;
        public $tinggi;
        public $jari_jari;
        const PHI = 3.14;

        public function __construct($jari, $tinggi){
            $this->jari = $jari;
            $this->tinggi = $tinggi;
            echo "<br/>Jari-jari = " . $jari . " cm";
            echo "<br/>Tinggi = " . $tinggi . " cm";
        }

        public function volumeGelas(){
            return self::PHI * $this->jari * $this->jari * $this->tinggi;
        }
    }

    class Harga extends Dispenser{

        public function __construct($hargaSegelas){
            $this -> hargaSegelas = $hargaSegelas;
            echo "<br/>Harga 1 gelas adalah = " . "Rp. " . $hargaSegelas . "-,";
        }
        public function harga(){
            return $this->hargaSegelas*3;
        }
    }

        echo "<br/><b><i> Menghitung Volume Tampung pada Gelas </i></b>";
        echo "<br/><br/><b> Diketahui : </b>";
        echo "<br/> PHI = " . Dispenser :: PHI;

        $volumegelas = new Dispenser(25, 19);
        echo "<br/> Volume Gelas = " . $volumegelas -> volumeGelas() . " cm3";
        echo "<br/><br/> Jadi Volume Gelas tersebut adalah ";
        echo $volumegelas -> volumeGelas() . " cm3";
        echo "<hr/>";

        echo "<br/><b><i>Pengenaan Biaya Setiap Gelas</i></b><br/>";
        echo "<br/><b>Diketahui :</b><br/>";
        $harga = new Harga(16000);
        echo "<br/> Karena harga setiap 1 gelasnya adalah Rp. 16000-,";
        echo "<br/>Maka, jika terdapat 3 gelas jumlah harganya adalah " . "<b>Rp. " . $harga -> harga(). "-,</b>";

?> 