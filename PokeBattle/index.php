<?php
	require 'resources/pokemon.php';
	$types[] = "Electric";


	$pikachu = new Pokemon('Pikachu', 200, 200, $attacks);
	$pikachu->giveTypes($types);
	$attack['name'] = 'Quick attack';
	$attack['type'] = 'Normal';
	$attack['power'] = 50;
	$pikachu->giveAttack($attack);
?>