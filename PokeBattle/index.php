<?php

	require 'resources/pokemon.php';
	
	


	function createPikachu(){


		$types[] = "Electric";

		$attacks[0]['name'] = 'Thunder';
		$attacks[0]['energytype'] = 'Electric';
		$attacks[0]['power'] = '70';
		$pikachu = new Pokemon('Pikachu', $types, 200, 200, $attacks);
		
		$attack['name'] = 'Quick attack';
		$attack['energytype'] = 'Normal';
		$attack['power'] = 50;
		$pikachu->giveAttack($attack);
		$attack['name'] = 'Electro Ball';
		$attack['energytype'] = 'Electric';
		$attack['power'] = 80;
		$pikachu->giveAttack($attack);
		$attack['name'] = 'Thunder Wave';
		$attack['energytype'] = 'Electric';
		$attack['power'] = 0;
		$attack['SpecialEffect'] = 'Paralyzed';
		$pikachu->giveAttack($attack);
		return $pikachu;
	}


	function createCharizard(){
		$types = array("Fire", "Flying");
		$attacks[0]['name'] = 'Fire Fang';
		$attacks[0]['energytype'] = 'Fire';
		$attacks[0]['power'] = '70';
		$Charizard = new Pokemon('Charizard', $types, 500, 500, $attacks);
		
		$attack['name'] = 'Flamethrower';
		$attack['energytype'] = 'Fire';
		$attack['power'] = 100;
		$Charizard->giveAttack($attack);
		$attack['name'] = 'Brave Bird';
		$attack['energytype'] = 'Flying';
		$attack['power'] = 150;
		$Charizard->giveAttack($attack);
		return $Charizard;
	}



	$pikachu = createPikachu(); 
	print_r($pikachu);
	    
	print('<br><br><br>');

	$charizard = createCharizard();
	print_r($charizard);

	$pikachu->attack($charizard, $pikachu->attack[2]);

	print_r($charizard);
?>