<?php
// Kelas Induk (Parent Class)
class Geometry {
    // Metode untuk menghitung luas
    public function calculateArea() {
        // Metode ini akan di-override oleh kelas anak
        return 0;
    }
}

// Kelas Anak Pertama (Child Class) yang mewarisi kelas Induk (Parent Class)
class Cube extends Geometry {
    private $sidelength;

    public function __construct($sidelength) {
        $this->sidelength = $sidelength;
    }

    // Override metode calculateArea() dari kelas Induk (Parent Class)
    public function calculateArea() {
        // Menghitung volume kubus
        return $this->sidelength * $this->sidelength * $this->sidelength;
    }
}

// Kelas Anak Kedua (Child Class) yang mewarisi kelas Induk (Parent Class)
class Bar extends Geometry {
    private $length, $width, $height;

    public function __construct($length, $width, $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    // Override metode calculateArea() dari kelas Induk (Parent Class)
    public function calculateArea() {
        return $this->length * $this->width * $this->height;
    }
}

// Membuat objek dari kelas Cube
$cube = new Cube(5);
echo "Volume Kubus: " . $cube->calculateArea() . "<br>"; // Output: 125

// Membuat objek dari kelas Anak Kedua Bar
$bar = new Bar(6, 4, 3);
echo "Volume Balok: " . $bar->calculateArea(); // Output: 72
?>
