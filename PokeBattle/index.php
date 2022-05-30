<?php

	require 'resources/pokemon.php';
	
	
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
	print_r($pikachu);
	print('<br>');
	

	//$effect = new effectiveness('Flying');
	    

	    
	/*$types = array("Fire", "Flying");

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
	print_r($Charizard);*/
?>