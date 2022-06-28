<?php 

				
				if (isset($_POST['name'])) {
			    	$attacks = explode(';', $_POST['name']);
			    	foreach($attacks as $a){
			    		if($a != ''){
			    			$attack[]=$a;
			    		}
			    	}
			    	$pikachuAttacks = $pikachu->getAttacks();
			    	$charizardAttacks = $charizard->getAttacks();
			    	$index = 1;
			    	$counterattack= 0;
			    	foreach($attack as $a){
			    		
			    		if($index == count($attack)){
			    			$latest = true;

			    		}else{
			    			$latest = false;
			    		}
			    		if($pikachu->getSpeed()>=$charizard->getSpeed()||$charizard->getStatus()=='Paralyzed'){
					    	if($a=='attack0'){
					    		$pikachu->attack($charizard, $pikachuAttacks[0], $latest);
					    	}
					    	if($a=='attack1'){
					    		$pikachu->attack($charizard, $pikachuAttacks[1], $latest);
					    	}
					    	if($a=='attack2'){
					    		$pikachu->attack($charizard, $pikachuAttacks[2], $latest);
					    	}
					    	if($a=='attack3'){
					    		$pikachu->attack($charizard, $pikachuAttacks[3], $latest);
					    	}
					    	$charizard->attack($pikachu, $charizardAttacks[$counterattack], $latest);
			    		}elseif($pikachu->getSpeed()<=$charizard->getSpeed()||$pikachu->getStatus()=='Paralyzed'){
			    			$charizard->attack($pikachu, $charizardAttacks[$counterattack], $latest);
			    			if($a=='attack0'){
					    		$pikachu->attack($charizard, $pikachuAttacks[0], $latest);
					    	}
					    	if($a=='attack1'){
					    		$pikachu->attack($charizard, $pikachuAttacks[1], $latest);
					    	}
					    	if($a=='attack2'){
					    		$pikachu->attack($charizard, $pikachuAttacks[2], $latest);
					    	}
					    	if($a=='attack3'){
					    		$pikachu->attack($charizard, $pikachuAttacks[3], $latest);
					    	}
			    		}
			    		
				    	$index=$index+1;
				    	$counterattack=$counterattack+1;
				    	if($counterattack==count($charizardAttacks)){
				    		$counterattack=0;
				    	}
				    	if($latest == true){
				    		//print('population is currently '.getPopulation().' pokemon big and their avarage health is '.getPopulationHealth());
				    	}
			    	}
			    	
				}


?>