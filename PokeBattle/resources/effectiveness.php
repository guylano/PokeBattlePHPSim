<?php
	class effectiveness{
		public function __construct($type){

	    	$this->strength = $this->getStrength($type);
	    	$this->weakness = $this->getWeakness($type);
	    	$this->resistance = $this->getResistance($type);
	    }




	    public function getStrength($type){
	    	$strength = array();
	    	switch ($type) {
			  case 'Normal':
			    
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
			    
			    break;
			  case 'Fighting':
			    
			    break;
			  case 'Flying':
			    
			    break;
			  case 'Poison':
			    
			    break;
			  case 'Ground':
			    
			    break;
			  case 'Rock':
			    
			    break;
			  case 'Bug':
			    
			    break;
			  case 'Ghost':
			    
			    break;
			  case 'Steel':
			    
			    break;
			  case 'Fire':
			    
			    break;
			  case 'Water':
			    
			    break;
			  case 'Grass':
			    
			    break;
			  case 'Electric':
			    
			    break;
			  case 'Psychic':
			    
			    break;
			  case 'Ice':
			    
			    break;
			  case 'Dragon':
			    
			    break;
			  case 'Dark':
			    
			    break;
			  case 'Fairy':
			    
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
			    
			    break;
			  case 'Fighting':
			    
			    break;
			  case 'Flying':
			    
			    break;
			  case 'Poison':
			    
			    break;
			  case 'Ground':
			    
			    break;
			  case 'Rock':
			    
			    break;
			  case 'Bug':
			    
			    break;
			  case 'Ghost':
			    
			    break;
			  case 'Steel':
			    
			    break;
			  case 'Fire':
			    
			    break;
			  case 'Water':
			    
			    break;
			  case 'Grass':
			    
			    break;
			  case 'Electric':
			    
			    break;
			  case 'Psychic':
			    
			    break;
			  case 'Ice':
			    
			    break;
			  case 'Dragon':
			    
			    break;
			  case 'Dark':
			    
			    break;
			  case 'Fairy':
			    
			    break;
			  
			  default:
			    $resistance = array();
			}
	    	return $resistance;
	    }



	}






?>