<?php 


class Attack{
	public function __construct($attack){
	    	$this->name = $attack['name'];
	    	$this->energytype = $attack['energytype'];
	    	$this->power = $attack['power'];
	}
}

?>