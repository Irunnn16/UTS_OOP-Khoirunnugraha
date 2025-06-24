<?php

class Rokok {
    private $merk;          // hanya bisa diakses dalam class ini
    public $harga;          // bisa diakses langsung
    protected $cukai;       // bisa diakses di class ini dan turunannya

    // constructor
    public function __construct($merk, $harga, $cukai) {
        $this->merk = $merk;
        $this->harga = $harga;
        $this->cukai = $cukai;
    }

    // method untuk ambil info rokok
    public function getInfo() {
        return "Merk: " . $this->merk . 
               ", Harga: Rp" . $this->harga . 
               ", Cukai: Rp" . $this->cukai;
    }

    // getter merk karena private
    public function getMerk() {
        return $this->merk;
    }

    // setter merk
    public function setMerk($merkBaru) {
        $this->merk = $merkBaru;
    }

    // getter cukai
    public function getCukai() {
        return $this->cukai;
    }

    // setter cukai
    public function setCukai($cukaiBaru) {
        $this->cukai = $cukaiBaru;
    }
}

// contoh penggunaan
$rokok1 = new Rokok("Djarum Super", 24000, 5000);

// output awal
echo $rokok1->getInfo(); 
echo "\n";

// update data
$rokok1->setMerk("Marlboro");
$rokok1->harga = 27000;
$rokok1->setCukai(6000);

// output setelah update
echo $rokok1->getInfo();
?>
