<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
class Calculator {
    public $number1;
    public $number2;

    public function __construct($numb1,$numb2) {
        $this->number1 = $numb1;
        $this->number2 = $numb2; // Perbaikan: Inisialisasi $this->number2 dengan $numb2
    }

    // Method lainnya
    public function tambah() {
        return $this->number1 + $this->number2;
    }

    public function kurang() {
        return $this->number1 - $this->number2;
    }

    public function bagi() {
        return $this->number1 / $this->number2;
    }

    public function kali() {
        return $this->number1 * $this->number2;
    }
}

// Buat object dan tampilkan masing-masing method
$calculator = new Calculator(10, 5);
echo '<br>Hasil Tambah adalah ' . $calculator->tambah();
echo '<br>Hasil Kurang adalah ' . $calculator->kurang(); 
echo '<br>Hasil Kali adalah ' . $calculator->kali(); 
echo '<br>Hasil Bagi adalah ' . $calculator->bagi(); 

?>
