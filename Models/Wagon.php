<?php

class Wagon
{
    public $numero;
    public $type;
    public $maxCap;
    public $capacite;

    // public $position;

    public function __construct($numero, $type, $maxCap, $capacite)
    {
        $this->numero = $numero;
        $this->type = $type;
        $this->maxCap = $maxCap;
        $this->capacite = $capacite;
        // $this->position = $position;
    }

    public function getAttributes() {
        var_dump(get_object_vars($this));
    }

    public function ajouterMarchandise(Marchandise $marchandise)
    {
        if ($this->capacite + $marchandise->quantite <= $this->maxCap) {
            $this->capacite += $marchandise->quantite;
            echo "La marchandise a été ajoutée au wagon " . $this->numero . ".\n";
            return true;
        } else {
            echo "Le wagon " . $this->numero . " n'a pas assez de place pour la marchandise.\n";
            return false;
        }
    }
}