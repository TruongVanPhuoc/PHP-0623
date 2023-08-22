<?php
class ElectricLamp{
    private bool $status;
    public function __construct(){
        $this->status = false;

    }
  function turnOff(){
    $this->status = false;
}
    function turnOn() {
        $this->status = true;
    }
}

class SwitchButton(){
    private bool $status;
    private ElectricLamp $lamp;
    public function __construct(){
            
            $this->status = false;
        }
}