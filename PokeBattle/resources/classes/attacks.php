<?php 
namespace classes;
require_once 'effectiveness.php';

class Attack extends Effectiveness{

	private $name;
	private $energytype;
	private $power;
	private $SpecialEffect = null;
	private $strength;
	private $weakness;
	private $resistance;



	public function __construct($attack){
	    	$this->setName($attack['name']);
	    	$this->setEnergyType($attack['energytype']);
	    	$this->setPower($attack['power']);
	    	$this->getEffects($attack['energytype']);
	    	if(array_key_exists('SpecialEffect', $attack)){
	    		$this->setSpecialEffect($attack['SpecialEffect']);
	    	}
	}

	public function getEffects($type){
		
		$effect = new effectiveness($type);
	    $this->strength = $effect->setStrength($type);
	    $this->weakness = $effect->setWeakness($type);
	    $this->resistance = $effect->setResistance($type);
	}


	public function getName(){
		return $this->name;
	}
	public function getEnergyType(){
		return $this->energytype;
	}
	public function getPower(){
		return $this->power;
	}
	public function getSpecialEffect(){
		return $this->SpecialEffect;
	}
	public function getStrength(){
		return $this->strength;
	}
	public function getWeakness(){
		return $this->weakness;
	}
	public function getResistance(){
		return $this->resistance;
	}
	

	public function setName($name) {
	    	$this->name = $name;
	}
	public function setEnergyType($energytype) {
	    	$this->energytype = $energytype;
	}
	public function setPower($power) {
	    	$this->power = $power;
	}
	public function setSpecialEffect($SpecialEffect) {
	    	$this->SpecialEffect = $SpecialEffect;
	}


}

?>