<?php 
//food è un estensione di Product
class Food extends Product { 
    public $weight;

	public function setWeight($weight) {
        $this->weight = $weight;
    }
}

?>