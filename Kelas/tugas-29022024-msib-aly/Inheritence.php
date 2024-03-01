<?php
// Class kendaraan yang merupakan parent class
class Kendaraan {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getInfo() {
        return "Merk: $this->merk, Warna: $this->warna";
    }
}

// class mobil yang merupakan extend atau turunan dari class kendaraan 
class Mobil extends Kendaraan {
    public $jenis;

    public function __construct($merk, $warna, $jenis) {
        parent::__construct($merk, $warna); // Memanggil konstruktor kelas parent
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return parent::getInfo() . ", Jenis: $this->jenis";
    }
}

// membuat objek dari kelas turunan dengan mengambil attribut dari kelas parent
$mobil = new Mobil("Honda", "Merah", "Hatchback");

// Memanggil metode getInfo() dari kelas turunan 
echo $mobil->getInfo(); // Output: Merk: Honda, Warna: Merah, Jenis: Hatchback
?>
