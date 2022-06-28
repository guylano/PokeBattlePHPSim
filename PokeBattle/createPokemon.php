<?php

	namespace classes;



	spl_autoload_register(function ($class_name) {
		require 'resources/' . $class_name . '.php';
		
	});
	

	
	$population = array();
	global $population;
	function createPikachu(){
		global $population;
		$attacks[0]['name'] = 'Hypnosis';
		$attacks[0]['energytype'] = 'Psychic';
		$attacks[0]['power'] = '0';
		$attacks[0]['SpecialEffect'] = 'Asleep';
		$attacks[1]['name'] = 'Ticle';
		$attacks[1]['energytype'] = 'Normal';
		$attacks[1]['power'] = 1;
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
		$population[] = $pikachu;
		return $pikachu;
	}


	function createCharizard(){
		global $population;
		$attacks[0]['name'] = 'Fire Fang';
		$attacks[0]['energytype'] = 'Fire';
		$attacks[0]['power'] = '70';
		$attack['SpecialEffect'] = 'Burned';
		$Charizard = new Charizard('Enemy', 34, $attacks);
		
		$attack['name'] = 'Flamethrower';
		$attack['energytype'] = 'Fire';
		$attack['power'] = 100;
		$Charizard->setAttack($attack);
		$attack['name'] = 'Brave Bird';
		$attack['energytype'] = 'Flying';
		$attack['power'] = 150;
		$Charizard->setAttack($attack);
		$population[] = $Charizard;
		return $Charizard;
	}



	$pikachu = createPikachu(); 
	//print_r($pikachu);
	    
	print('<br><br><br>');

	$charizard = createCharizard();
	//print_r($charizard);

	

	
	function getPopulation(){
		global $population;
		foreach($population as $p){
			if($p->getStatus() != 'dead'){
				$livingPopulation[] = $p;
			}
		}
		return count($livingPopulation);
	}


	function getPopulationHealth(){
		global $population;
		$allhp = 0;
		foreach($population as $p){
			$allhp = $allhp + $p->getCurrentHealth();
		}
		$avgHealth=$allhp/getPopulation($population);

		return $avgHealth;
	}

	
?>

