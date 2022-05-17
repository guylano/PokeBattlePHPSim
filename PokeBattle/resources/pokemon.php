<?php
	require 'resources/effectiveness.php';
	
	class Pokemon{
		public function __construct($name, $energytype, $max_health, $current_health){
			$this->efectiveness = new efectiveness($energytype);
	    	$this->name = $name;
	    	$this->energytype = $energytype;
	    	$this->max_health = $max_health;
	    	$this->current_health = $current_health;
	    	$this->efectiveness = new efectiveness($energytype);
	    	$this->weakness = $this->efectiveness->weakness;
	    	$this->resistance = $this->efectiveness->resistance;
	    	//should have weaknesses and resistances in a dynamic central place and base it on attack type
	    }


	    
	    	
	    

	    public function giveAttack($attacks= array()){
	    	
	    	$this->attack[] = new attack($attack);
	    	
	    	
	    }


	}

?>