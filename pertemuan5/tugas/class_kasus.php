<?php

    class Tim {
        protected $Nama;
        protected $Negara;

        protected function __construct($Nama, $Negara) {
            $this->Nama = $Nama;
            $this->Negara = $Negara;
        }

        protected function getinfo() {
            echo 'Nama Pembalap: ' . $this->Nama . '<br>';
            echo 'Asal Negara: ' . $this->Negara . '<br>';
        }
    }

    class Ferarri extends Tim {
        public $Nomor;

        public function __construct($Nama, $Negara, $Nomor) {
            parent::__construct($Nama, $Negara, $Nomor);
            $this->Nomor = $Nomor;
        }

        public function getInfoFerarri() {
            parent::getInfo();
            echo 'Jumlah Juara: ' . $this->Nomor . '<br>';
        }
    }

    class Mercedes extends Tim {
        public $Nomor;

        public function __construct($Nama, $Negara, $Nomor) {
            parent::__construct($Nama, $Negara);
            $this->Nomor = $Nomor;
        }

        public function getInfoMercedes() {
            parent::getInfo();
            echo 'Jumlah Juara: ' . $this->Nomor . '<br>';
        }
    }
    class Redbull extends Tim {
        public $Nomor;

        public function __construct($Nama, $Negara, $Nomor) {
            parent::__construct($Nama, $Negara);
            $this->Nomor = $Nomor;
        }

        public function getInfoRedbull() {
            parent::getInfo();
            echo 'Jumlah Juara: ' . $this->Nomor . '<br>';
        }
    }





?>