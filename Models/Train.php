<?php

class Train {
    public $refTrain;
    public $listWagon=[];

    public function __construct($refTrain, $listWagon){
        $this->refTrain = $refTrain;
        $this->listWagon = $listWagon;
    }

    public function __toString(){
        return "Le train" . $this->refTrain . " a " . $this->listWagon;
    }

    public function getAttributes() {
        var_dump(get_object_vars($this));
    }

}