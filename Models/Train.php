<?php

class Train{

    public $refTrain;
    public $listWagon=[];

    
    public function __construct($refTrain, $listWagon){
        $this->refTrain = $refTrain;
        $this->listWagon = $listWagon;

    }

    public function passerCommande(){
        
    }

}