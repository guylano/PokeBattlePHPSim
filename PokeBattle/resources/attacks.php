<?php 
require 'effectiveness.php';

class Attack{
	public function __construct($attack){
	    	$this->name = $attack['name'];
	    	$this->energytype = $attack['energytype'];
	    	$this->power = $attack['power'];
	    	$this->getEfects($attack['energytype']);
	}

	public function getEfects($type){
		
		$effect = new effectiveness($type);
	    $this->strength = $effect->strength;
	    $this->weakness = $effect->weakness;
	    $this->resistance = $effect->resistance;
	}
}

?>