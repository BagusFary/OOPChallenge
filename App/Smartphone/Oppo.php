<?php

class Oppo extends Smartphone implements Screenshot {
    protected $version;

    // public function __construct() {
    //     parent::__construct();
    // }

    public function getTipe() {
        parent::getTipe();
    }

    public function UI() {
       return __CLASS__ ." ColorOs";
    }
    
    public function capture() {
        return "Tekan tombol power + volume down + volume up";
    }

    public function setUIVersion($version) {
        return  $this->getMerk() . " " . $this->getTipe() . " OneUI " .  " " . $this->version = $version;
    }


}


?>