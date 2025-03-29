<?php
    class HCN {
        public $rong;
        public $dai;
        public function __construct() {
            $this->rong = 10;
            $this->dai = 20;
        }

        public function getChuVi(){
            return 2 * ($this ->rong + $this->dai);
        }
        public function getDienTich(){
            return $this->dai * $this->rong;
        }
    }

    $h1 = new HCN();
    echo $h1->getChuVi();
    
?>