<?php
	
	require 'attacks.php';
	
	class Pokemon{
		public function __construct($name, $energytype, $max_health, $current_health, $attacks = array()){
	    	$this->name = $name;
	    	$this->status = 'alive';
	    	$this->energytype = $energytype;
	    	$this->max_health = $max_health;
	    	$this->current_health = $current_health;
	    	$this->attack = array();
	    	if(!empty($attacks)){
	    		foreach ($attacks as $attack) {
	    			$this->attack[] = new Attack($attack);
	    		}
	    	}
	    	//should have weaknesses and resistances in a dynamic central place and base it on attack type
	    }


	    
	    	
	    

	    public function giveAttack($attack= array()){
	    	
	    	$this->attack[] = new Attack($attack);
	    	
	    	
	    }


	    public function attack($enemy, $attack){
	    	$damage = $attack->power;
	    	if(in_array($attack->energytype, $this->energytype)){
	    		//S.T.A.B damage
	    		$damage = $damage * 1.5;
	    	}
	    	foreach($enemy->energytype as $type){
	    		if(in_array($type, $attack->strength)){
	    			$damage = $damage * 2;
	    		}
	    		if(in_array($type, $attack->weakness)){
	    			$damage = $damage /2;
	    		}
	    		if(in_array($type, $attack->resistance)){
	    			$damage = 0;
	    		}
	    	}

	    	$enemy->current_health = $enemy->current_health - $damage;
	    	print('<br><br><br>'.$this->name.' used '.$attack->name.' and did '.$damage.' damage.<br><br><br>');
	    	if($damage < $attack->power){
	    		print('<br><br><br>It was not very effective<br><br><br>');
	    	}
	    	if($damage > $attack->power){
	    		print('<br><br><br>It was very effective<br><br><br>');
	    	}
	    	if($enemy->current_health <= 0){
	    		$enemy->current_health = 0;
	    		$enemy->status = 'dead';
	    		print('<br><br><br>'.$enemy->name.' died!<br><br><br>');
	    	}
	    	if($enemy->status != 'dead' && array_key_exists('SpecialEffect', $attack)){
	    		$enemy->status = $attack->SpecialEffect;
	    		print('<br><br><br>'.$enemy->name.' is now '.$attack->SpecialEffect.'<br><br><br>');
	    	}

	    }


	}

?>