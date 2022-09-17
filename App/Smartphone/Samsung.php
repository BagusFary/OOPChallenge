<?php

class Samsung extends Smartphone implements Screenshot {
    protected $version;

    // public function __construct() {
    //     parent::__construct();
    // }

    public function getTipe() {
        parent::getTipe();
    }

    public function UI() {
       return __CLASS__ ." OneUI";
    }
    
    public function capture() {
        return "Tekan tombol power + volume up";
    }

    public function setUIVersion($version) {
        return  $this->getMerk() . " " . $this->getTipe() . " OneUI " .  " " . $this->version = $version;
    }


}


?>