<?php

    class Car {
        // hak akses: public, private, protected
        // property
        public $brand;
        public $color;

        // method
        function getBrand() {
            return $this->brand;
        }
        function getColor() {
            return $this->color;
        }
    }

    // object
    $tesla = new Car();
    $supra = new Car();

    // set value / setter
    $tesla->brand = 'Tesla';
    $tesla->color = "Blue";
    $supra->brand = "Supra";
    $supra->color = "Red";

    // echo
    echo $tesla->getBrand();
    echo $tesla->getColor();
    echo '<br><br>';
    echo $supra->getBrand();
    echo $supra->getColor();

?>