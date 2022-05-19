<?php
	require 'effectiveness.php';
	require 'attacks.php';
	
	class Pokemon{
		public function __construct($name, $energytype, $max_health, $current_health, $attacks = array()){
			//$this->effectiveness = new effectiveness($energytype);
	    	$this->name = $name;
	    	$this->energytype = $energytype;
	    	$this->max_health = $max_health;
	    	$this->current_health = $current_health;
	    	$effectiveness = new effectiveness($energytype);
	    	$this->strength = $effectiveness->strength;
	    	$this->weakness = $effectiveness->weakness;
	    	$this->resistance = $effectiveness->resistance;
	    	$this->attack = array();
	    	if(!empty($attacks)){
	    		foreach ($attacks as $attack) {
	    			$this->attack[] = new attack($attack);
	    		}
	    	}
	    	//should have weaknesses and resistances in a dynamic central place and base it on attack type
	    }


	    
	    	
	    

	    public function giveAttack($attack= array()){
	    	
	    	$this->attack[] = new attack($attack);
	    	
	    	
	    }


	}

?>