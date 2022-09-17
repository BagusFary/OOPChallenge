<?php

class Xiaomi extends Smartphone implements Screenshot {
    protected $version;

    public function getTipe() {
        parent::getTipe();
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