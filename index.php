<?php

// Kelas induk: Rokok
class Rokok {
    private $merk;          // hanya bisa diakses dalam class ini
    public $harga;          // bisa diakses langsung dari luar
    protected $cukai;       // bisa diakses di class ini dan turunannya

    // constructor
    public function __construct($merk, $harga, $cukai) {
        $this->merk = $merk;
        $this->harga = $harga;
        $this->cukai = $cukai;
    }

    // method untuk menampilkan info rokok
    public function getInfo() {
        return "Merk: " . $this->merk .
               ", Harga: Rp" . $this->harga .
               ", Cukai: Rp" . $this->cukai;
    }

    // getter & setter untuk merk
    public function getMerk() {
        return $this->merk;
    }

    public function setMerk($merkBaru) {
        $this->merk = $merkBaru;
    }

    // getter & setter untuk cukai
    public function getCukai() {
        return $this->cukai;
    }

    public function setCukai($cukaiBaru) {
        $this->cukai = $cukaiBaru;
    }
}

// Kelas turunan 1: Rokok Elektrik
class RokokElektrik extends Rokok {
    public $rasa; // rasa liquid dari rokok elektrik

    public function __construct($merk, $harga, $cukai, $rasa) {
        parent::__construct($merk, $harga, $cukai); // panggil constructor parent
        $this->rasa = $rasa;
    }

    // method override + tambahan info rasa
    public function getInfo() {
        return parent::getInfo() . ", Rasa: " . $this->rasa;
    }
}

// Kelas turunan 2: Rokok Kretek
class RokokKretek extends Rokok {
    public $jenisTembakau; // jenis tembakau yang dipakai

    public function __construct($merk, $harga, $cukai, $jenisTembakau) {
        parent::__construct($merk, $harga, $cukai);
        $this->jenisTembakau = $jenisTembakau;
    }

    // method override + tambahan info jenis tembakau
    public function getInfo() {
        return parent::getInfo() . ", Jenis Tembakau: " . $this->jenisTembakau;
    }
}

// OBJEK & OUTPUT

// objek dari class utama
echo "\n";
$rokok1 = new Rokok("Djarum Super", 24000, 5000);
echo $rokok1->getInfo() . "\n";
echo "\n";

// update data rokok1
$rokok1->setMerk("Marlboro");
$rokok1->harga = 27000;
$rokok1->setCukai(6000);
echo $rokok1->getInfo() . "\n";
echo "\n";


// objek dari RokokElektrik
$rokokVape = new RokokElektrik("RELX", 85000, 10000, "Mint Ice");
echo $rokokVape->getInfo() . "\n";
echo "\n";


// objek dari RokokKretek
$rokokKretek = new RokokKretek("Gudang Garam", 26000, 5000, "Tembakau Madura");
echo $rokokKretek->getInfo() . "\n";
echo "\n";

?>
