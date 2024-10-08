<?php
	namespace classes;
	require_once 'attacks.php';
	
	// maak ook subclases aan voor pikachu en charmander

	abstract class Pokemon{ 
		// visibilty modifiers
		private $name;
		private $team;
		private $activity;
		private $level;
		private $status;
		private $status_counter;
		private $max_health;
		private $current_health;
		private $attack = array();
		private $speed;


		


	    // Getters and setters
	    
		
	    
	    


	    


	    public function attack($enemy, $attack, $latest){
	    	
	    	$resist = false;
	    	$effectiveness = 'neutral';
	    	$damage = $attack->getPower();
	    	if(in_array($attack->getEnergyType(), $this->getEnergyType())){
	    		//S.T.A.B damage
	    		$damage = $damage * 1.5;
	    	}
	    	foreach($enemy->getEnergyType() as $type){
	    		if(in_array($type, $attack->getStrength())){
	    			$damage = $damage * 2;
	    			$effectiveness = 'strong';
	    		}
	    		if(in_array($type, $attack->getWeakness())){
	    			$damage = $damage /2;
	    			$effectiveness = 'weak';
	    		}
	    		if(in_array($type, $attack->getResistance())){
	    			$resist=true;
	    			$damage = 0;
	    		}
	    	}
	    	if($enemy->getStatus() == 'dead' || $enemy->getStatus() == 'alive'){
	    		
	    	}else{
	    		if($enemy->getStatus() != 'Paralyzed' && $enemy->getStatus()!= 'Poisoned'){
		    		$enemy->setStatusCounter($enemy->getStatusCounter()+1);
		    		if($enemy->getStatusCounter() == 2){
		    			if($latest == true){
		    				print(''.$enemy->getName().' is no longer '.$enemy->getStatus().'<br><br>');
		    			}
		    			$enemy->setStatus('alive');
		    			$enemy->setStatusCounter(0);

		    		}
	    		}else{
	    			$enemy->setStatusCounter($enemy->getStatusCounter()+1);
	    		}
	    	}

	    	//sp effect check
	    	$noDamage=false;
	    	$lowerDamage=false;
	    	$slightDamage=false;

	    	switch ($this->getStatus()) {
	    		case 'Paralyzed':

	    			if($this->getStatusCounter()==2){
		    			$damage = 0;
		    			$noDamage = true;
		    			$this->setStatusCounter(0);
	    			}
	    			break;

	    		case 'Frozen':
	    			$damage = 0;
	    			$noDamage = true;
	    			break;

	    		case 'dead':
	    			$damage = 0;
	    			$noDamage = true;
	    			$latest=false;
	    			break;

	    		case 'Burned':
	    			
	    			$slightDamage = true;
	    			break;

	    		case 'Poisoned':
	    			$damage = $damage-($damage/10);
	    			$slightDamage = true;
		    		break;

	    		case 'Asleep':
	    			$damage = 0;
	    			$noDamage = true;
	    			break;
	    			
	    		default:
	    			
	    			break;
	    		
	    		
	    	}


	    	$enemy->setCurrentHealth($enemy->getCurrentHealth() - $damage);
	    	if($latest == true && $noDamage == false){
	    		print(''.$this->getName().' used '.$attack->getName().' and did '.$damage.' damage.<br><br>');
	    	}
	    	if($enemy->getCurrentHealth() <= 0){
	    		$enemy->setCurrentHealth(0);
	    	}
	    	if($latest == true && $noDamage == false){
	    		print(''.$enemy->getName().' has '.$enemy->getCurrentHealth().' health left<br><br>');

	    	}
	    	if($latest == true){
		    	if($resist==true){
		    		print('It did not effect the '.$enemy->getName().'<br><br>');
		    	}elseif($noDamage==true){
		    		print($this->getName().' was '.$this->getStatus().'<br><br>');
		    	}elseif($effectiveness == 'weak'){
		    		print('It was not very effective<br><br>');
		    	}elseif($effectiveness == 'strong'){
		    		print('It was very effective<br><br>');
		    	}
	    	}

	    	if($enemy->getCurrentHealth() <= 0){
	    		$enemy->setCurrentHealth(0);
	    		$enemy->setStatus('dead');
	    		if($latest == true){
	    			print(''.$enemy->getName().' died!<br><br>');
	    		}
	    	}
	    	if($enemy->getStatus() != 'dead' && $attack->getSpecialEffect() != null){
	    		if($noDamage==false){
		    		if($enemy->getStatus()==$attack->getSpecialEffect()){
		    			if($latest == true){
		    				print(''.$enemy->getName().' was already '.$attack->getSpecialEffect().'😴😴<br><br>');
		    			}
		    		}else{
			    		$enemy->setStatus($attack->getSpecialEffect());
			    		if($latest == true){
			    			print(''.$enemy->getName().' is now '.$attack->getSpecialEffect().'<br><br>');
			    		}
			    		$enemy->setStatusCounter(0);
		    		}
	    		}
	    	}

	    	if($this->getStatus()=='Burned'){
	    		$this->setCurrentHealth($this->getCurrentHealth()-30);
	    		if($this->getCurrentHealth()<0){
	    			$this->setCurrentHealth(0);
	    		}
	    		if($latest == true){
		    		print(''.$this->getName().' was hurt by its burn<br><br>');
		    	}
		    	if($this->getCurrentHealth() == 0 ){
		    		if($latest == true){
	    				print(''.$this->getName().' died!<br><br>');
	    			}
		    	}
	    	}

	    	if($this->getStatus()=='Poisoned'){
	    		$this->setCurrentHealth($this->getCurrentHealth()-30);
	    		if($this->getCurrentHealth()<0){
	    			$this->setCurrentHealth(0);
	    		}
	    		if($latest == true){
		    		print(''.$this->getName().' was hurt by its poison<br><br>');
		    	}
		    	if($this->getCurrentHealth()== 0 ){
		    		if($latest == true){
	    				print(''.$this->getName().' died!<br><br>');
	    			}
		    	}
	    	}


	    }


	}

?>