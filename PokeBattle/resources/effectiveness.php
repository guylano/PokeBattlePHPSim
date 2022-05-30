<?php

	class effectiveness{
		public function __construct($type){
			//word gedaan vanuit attacks

	    	$this->strength = $this->getStrength($type);
	    	$this->weakness = $this->getWeakness($type);
	    	$this->resistance = $this->getResistance($type);
	    }

	    public function getStrength($type){
	    	$strength = array();
	    	
    		switch ($type) {
			  case 'Normal':
			    $strength = array();
			    break;
			  case 'Fighting':
			    $strength = array('Normal', 'Ice', 'Rock', 'Dark', 'Steel');
			    break;
			  case 'Flying':
			    $strength = array('Grass', 'Fighting', 'Bug');
			    break;
			  case 'Poison':
			    $strength = array('Grass', 'Fairy');
			    break;
			  case 'Ground':
			    $strength = array('Fire', 'Electric', 'Poison', 'Rock', 'Steel');
			    break;
			  case 'Rock':
			    $strength = array('Fire', 'Ice', 'Flying', 'Bug');
			    break;
			  case 'Bug':
			    $strength = array('Grass', 'Psychic', 'Dark');
			    break;
			  case 'Ghost':
			    $strength = array('Psychic', 'Ghost');
			    break;
			  case 'Steel':
			    $strength = array('Ice', 'Rock', 'Fairy');
			    break;
			  case 'Fire':
			    $strength = array('Grass', 'Ice', 'Bug', 'Steel');
			    break;
			  case 'Water':
			    $strength = array('Fire', 'Ground', 'Rock');
			    break;
			  case 'Grass':
			    $strength = array('Water', 'Ground', 'Rock');
			    break;
			  case 'Electric':
			    $strength = array('Water', 'Flying');
			    break;
			  case 'Psychic':
			    $strength = array('Fighting', 'Poison');
			    break;
			  case 'Ice':
			    $strength = array('Grass', 'Ground', 'Flying', 'Dragon');
			    break;
			  case 'Dragon':
			    $strength = array('Dragon');
			    break;
			  case 'Dark':
			    $strength = array('Psychic', 'Ghost');
			    break;
			  case 'Fairy':
			    $strength = array('Fighting', 'Dragon', 'Dark');
			    break;
			  
			  default:
			    $strength = array();
			}
		    return $strength;
	   	}
	    	
	    public function getWeakness($type){
	    	$weakness = array();
	    	
    		switch ($type) {
			  case 'Normal':
			    $weakness = array('Rock', 'Steel');
			    break;
			  case 'Fighting':
			    $weakness = array('Poison', 'Flying', 'Psychic', 'Bug', 'Fairy');
			    break;
			  case 'Flying':
			    $weakness = array('Electric', 'Rock', 'Steel');
			    break;
			  case 'Poison':
			    $weakness = array('Poison', 'Ground', 'Rock', 'Ghost');
			    break;
			  case 'Ground':
			    $weakness = array('Grass', 'Bug');
			    break;
			  case 'Rock':
			    $weakness = array('Fighting', 'Ground', 'Steel');
			    break;
			  case 'Bug':
			    $weakness = array('Fire', 'Fighting', 'Poison', 'Flying', 'Ghost', 'Steel', 'Flying');
			    break;
			  case 'Ghost':
			    $weakness = array('Dark');
			    break;
			  case 'Steel':
			    $weakness = array('Fire', 'Water', 'Electric', 'Steel');
			    break;
			  case 'Fire':
			    $weakness = array('Fire', 'Water', 'Rock', 'Dragon');
			    break;
			  case 'Water':
			    $weakness = array('Water', 'Grass', 'Dragon');
			    break;
			  case 'Grass':
			    $weakness = array('Fire', 'Grass', 'Poison', 'Flying', 'Bug', 'Dragon', 'Steel');
			    break;
			  case 'Electric':
			    $weakness = array('Grass', 'Electric', 'Dragon');
			    break;
			  case 'Psychic':
			    $weakness = array('Psychic', 'Steel');
			    break;
			  case 'Ice':
			    $weakness = array('Fire','Water', 'Ice', 'Steel');
			    break;
			  case 'Dragon':
			    $weakness = array('Steel');
			    break;
			  case 'Dark':
			    $weakness = array('Fighting', 'Dark', 'Fairy');
			    break;
			  case 'Fairy':
			    $weakness = array('Fire', 'Poison', 'Steel');
			    break;
			  
			  default:
			    $weakness = array();
			}
	    	return $weakness;
	    }

	    public function getResistance($type){
	    	$resistance = array();
    		switch ($type) {
			  case 'Normal':
			    $resistance = array('Ghost');
			    break;
			  case 'Fighting':
			    $resistance = array('Ghost');
			    break;
			  case 'Flying':
			    $resistance = array();
			    break;
			  case 'Poison':
			    $resistance = array('Steel');
			    break;
			  case 'Ground':
			    $resistance = array('Flying');
			    break;
			  case 'Rock':
			    $resistance = array();
			    break;
			  case 'Bug':
			    $resistance = array();
			    break;
			  case 'Ghost':
			    $resistance = array('Normal');
			    break;
			  case 'Steel':
			    $resistance = array();
			    break;
			  case 'Fire':
			    $resistance = array();
			    break;
			  case 'Water':
			    $resistance = array();
			    break;
			  case 'Grass':
			    $resistance = array();
			    break;
			  case 'Electric':
			    $resistance = array('Ground');
			    break;
			  case 'Psychic':
			    $resistance = array('Dark');
			    break;
			  case 'Ice':
			    $resistance = array();
			    break;
			  case 'Dragon':
			    $resistance = array('Fairy');
			    break;
			  case 'Dark':
			    $resistance = array();
			    break;
			  case 'Fairy':
			    $resistance = array();
			    break;
			  
			  default:
			    $resistance = array();
			}
	    	return $resistance;
	    }

	}
?>