<?php
	require_once 'resources/classes/pokemon.php';
	class pikachu extends pokemon{

		private $name;
		private $team;
		private $energytype;
		private $level;
		private $max_health;
		private $current_health;
		private $status;
		private $activity;
		private $attack;
		private $status_counter;
		private $speed;

		public function __construct($team, $level, $attacks = array()){
			$this->name = 'Pikachu';
			$this->team = $team;
			$this->energytype[] = 'Electric';
			$this->level = $level;
			$this->max_health = 150+($level*7);
			$this->speed = 100+($level*7);
			$this->current_health = $this->max_health;
			$this->status = 'alive';
			$this->activity = 'field';
			if(!empty($attacks)){
	    		foreach ($attacks as $attack) {
	    			$this->setAttack($attack);
	    		}
	    	}
		}
		public function setName($name) {
	    	$this->name = $name;
	    }
	    public function setTeam($team) {
	    	$this->team = $team;
	    }
	    public function setActivity($activity) {
	    	$this->activity = $activity;
	    }
	    public function setStatus($status) {
	    	$this->status = $status;
	    }
	    public function setSpeed($speed) {
	    	$this->speed = $speed;
	    }
	    public function setStatusCounter($status_counter) {
	    	$this->status_counter = $status_counter;
	    }
	    
	    public function setMaxHealth($max_health) {
	    	$this->max_health = $max_health;
	    }
	    public function setCurrentHealth($current_health) {
	    	$this->current_health = $current_health;
	    }
	    public function setAttack($attack= array()){
	    	$this->attack[] = new Attack($attack);	
	    }
	    public function setEnergyType($energytype= array()){
	    	$this->energytype = $energytype;	
	    }


	    public function getName() {
	    	return $this->name;
	    }
	    public function getTeam() {
	    	return $this->team;
	    }
	    public function getActivity() {
	    	return $this->activity;
	    }
	    public function getStatus() {
	    	return $this->status;
	    }
	    public function getSpeed() {
	    	return $this->speed;
	    }
	    public function getStatusCounter() {
	    	return $this->status_counter;
	    }
	    public function getMaxHealth() {
	    	return $this->max_health;
	    }
	    public function getCurrentHealth() {
	    	return $this->current_health;
	    }
	    public function getAttacks() {
	    	return $this->attack;
	    }
	    public function getEnergyType() {
	    	return $this->energytype;
	    }
	    
	    
	}


?>