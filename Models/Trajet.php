<?php

class Trajet{

    public $ref;
    public $train;
    public $depart;
    public $arrivee;
    public $gare=[];
    public $horDep;
    public $horArr;
    public $jours=[];

    public function __construct($ref, Train $train, Gare $depart , Gare $arrivee, $gare ,$horDep, $horArr, $jours){
        $this->ref = $ref;
        $this->train = $train;
        $this->depart = $depart;
        $this->arrivee = $arrivee;
        $this->gare = $gare;
        $this->horDep = $horDep;
        $this->horArr = $horArr;
        $this->jours = $jours;
    }

    public function getAttributes() {
        var_dump(get_object_vars($this));
    }
    


}