<?php

	require 'resources/classes/pokemon.php';
	require 'resources/classes/pikachu.php';
	require 'resources/classes/charizard.php';
	
	


	function createPikachu(){

		$attacks[0]['name'] = 'Hypnosis';
		$attacks[0]['energytype'] = 'Psychic';
		$attacks[0]['power'] = '0';
		$attacks[0]['SpecialEffect'] = 'Asleep';
		$attacks[1]['name'] = 'Toxic';
		$attacks[1]['energytype'] = 'Poison';
		$attacks[1]['power'] = 0;
		$attacks[1]['SpecialEffect'] = 'Poisoned';
		$pikachu = new pikachu('Allied' , 34, $attacks);
		
	

		$attack['name'] = 'Electro Ball';
		$attack['energytype'] = 'Electric';
		$attack['power'] = 80;
		$pikachu->setAttack($attack);
		$attack['name'] = 'Thunder Wave';
		$attack['energytype'] = 'Electric';
		$attack['power'] = 0;
		$attack['SpecialEffect'] = 'Paralyzed';
		$pikachu->setAttack($attack);
		return $pikachu;
	}


	function createCharizard(){
		
		$attacks[0]['name'] = 'Fire Fang';
		$attacks[0]['energytype'] = 'Fire';
		$attacks[0]['power'] = '70';
		$Charizard = new charizard('Enemy', 34, $attacks);
		
		$attack['name'] = 'Flamethrower';
		$attack['energytype'] = 'Fire';
		$attack['power'] = 100;
		$Charizard->setAttack($attack);
		$attack['name'] = 'Brave Bird';
		$attack['energytype'] = 'Flying';
		$attack['power'] = 150;
		$Charizard->setAttack($attack);
		return $Charizard;
	}



	$pikachu = createPikachu(); 
	//print_r($pikachu);
	    
	print('<br><br><br>');

	$charizard = createCharizard();
	//print_r($charizard);

	$population = array($pikachu, $charizard);

	
	function getPopulation($population){
		foreach($population as $p){
			if($p->getStatus() != 'dead'){
				$livingPopulation[] = $p;
			}
		}
		return count($livingPopulation);
	}


	function getPopulationHealth($population){
		$allhp = 0;
		foreach($population as $p){
			$allhp = $allhp + $p->getCurrentHealth();
		}
		$avgHealth=$allhp/getPopulation($population);



		return $avgHealth;
	}

	
?>

