<?php

class Xiaomi extends Smartphone implements Screenshot {
    protected $version;

    public function __construct($tipe){
        $this->tipe = $tipe;
    }

    public function UI() {
       return __CLASS__ ." MIUI";
    }
    
    public function capture() {
        return "Tekan tombol power + volume down";
    }

    public function setUIVersion($version) {
        return  $this->getMerk() . " " . $this->getTipe() . " MIUI " .  " " . $this->version = $version;
    }


}


?>