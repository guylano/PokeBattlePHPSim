
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemon</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php require 'createPokemon.php'; ?>
    
</head>
<body style="background-image: url('resources/images/pokemon_field.png') ;
	background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
	<div class="relative">
		<div class=" w-6/12  text-center  justify-end" style="margin-top: 400px; float: right;">
			<div class="p-6 rounded-lg shadow-lg bg-gray-400" style="">
				<div class="bg-white h-full" >
					<?php 
					    require 'runAttacks.php';
						
						$enemy_healthLeft=$charizard->getCurrentHealth()/$charizard->getMaxHealth()*100;
						$ally_healthLeft=$pikachu->getCurrentHealth()/$pikachu->getMaxHealth()*100;
					?>
				</div>
			</div>
		</div>
		<div class="relative md:fixed w-full  min-h-screen inset-0">
			<div>
				<div class="flex justify-end">
				  <div class="block p-6 rounded-lg shadow-lg bg-red-400 max-w-sm w-1/5">
				    <h5 class="text-white text-xl leading-tight font-medium mb-2"><?php print($charizard->getName().' lvl '.$charizard->getLevel()); ?>
				    	<?php 
				    		if($charizard->getStatus()!='alive'){
				    			if($charizard->getStatus()=='Asleep'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-gray-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>SLP</p></div>');
				    			}
				    			if($charizard->getStatus()=='Paralyzed'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-yellow-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>PAR</p></div>');	
				    			}
				    			if($charizard->getStatus()=='Poisoned'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-purple-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>PSN</p></div>');	
				    			}
				    			if($charizard->getStatus()=='Frozen'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-blue-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>FZN</p></div>');	
				    			}
				    			if($charizard->getStatus()=='Burned'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-red-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>BRN</p></div>');	
				    			}
				    		}
				    	?>
				    </h5>
				    

				    

				    <div class="w-4/5 bg-gray-200 rounded-full text-black">
		  				<div class="bg-blue-600 text-xs font-medium text-black text-center p-0.5 leading-none rounded-full" <?php print('style="width: '.$enemy_healthLeft.'%"')?>>
		  					<?php 
		  						print($charizard->getCurrentHealth().'/'.$charizard->getMaxHealth());
		  					?>

		  				</div>
					</div>
					
				  </div>
				</div>

				<div class="flex ">
				  <div class="block p-6 rounded-lg shadow-lg bg-blue-400 max-w-sm w-1/5">
				    <h5 class="text-white text-xl leading-tight font-medium mb-2"><?php print($pikachu->getName().' lvl '.$charizard->getLevel()); ?>
				    	<?php 
				    		if($pikachu->getStatus()!='alive'){
				    			if($pikachu->getStatus()=='Asleep'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-gray-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>slp</p></div>');
				    			}
				    			if($pikachu->getStatus()=='Paralyzed'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-yellow-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>par</p></div>');	
				    			}
				    			if($pikachu->getStatus()=='Poisoned'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-purple-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>par</p></div>');	
				    			}
				    			if($pikachu->getStatus()=='Frozen'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-blue-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>FZN</p></div>');	
				    			}
				    			if($pikachu->getStatus()=='Burned'){
				    				print('<div class=" fixed block rounded-lg shadow-lg bg-red-400 max-w-sm px-1 text-center" style="margin-left:230px;"><p>BRN</p></div>');	
				    			}
				    		}
				    	?>
				    </h5>
				    <div class="w-4/5 bg-gray-200 rounded-full text-black">
		  				<div class="bg-blue-600 text-xs font-medium text-black text-center p-0.5 leading-none rounded-full" <?php print('style="width: '.$ally_healthLeft.'%"')?>>
		  					<?php 
		  						print($pikachu->getCurrentHealth().'/'.$pikachu->getMaxHealth());
		  					?>
		  				</div>
					</div>
				  </div>
				</div>
			</div>
			<div>
				<div class="flex " style="width: 200px; float: right; margin-right: 200px;">
					<?php 
						if($charizard->getCurrentHealth()!= 0){
					?>
					<img src="resources/images/charizard.png" class="mr-5" style="width: 200px;">
					<?php
				 		} 
				 	?>
				</div>
				<div class="flex" style="width: 150px; padding-top: 100px; margin-left: 300px;">
					<?php 
						if($pikachu->getCurrentHealth()!= 0){
					?>
					<img src="resources/images/pikachu.png" class="ml-5" style="width: 150px;">
					<?php
				 		} 
				 	?>
				</div>
			</div>
			<div>
			    <p>
			    	<div>
				        <?php 
				        	$index=0;
				        	$attacks = $pikachu->getAttacks();
				        	if (isset($_GET['name'])){
				        		foreach($attacks as $attack){
					        		print('<a class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" href="index.php?name='.$_GET['name'].'attack'.$index.';">'.$attack->getName().'</a>'); 
					        		$index=$index+1;
				        		}
				        	}else{
					        	foreach($attacks as $attack){
					        		print('<a class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" href="index.php?name=;attack'.$index.';">'.$attack->getName().'</a>'); 
					        		$index=$index+1;
				        		}
				        	}
				        ?>
			        </div>
		        	<?php
			        	print('<br><br><a class="inline-block px-6 py-2.5 bg-red-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg transition duration-150 ease-in-out" href="index.php">Reset</a>'); 
			        ?>
			    </p>
			</div>
		</div>
	</div>
</body>
</html>

<?php 
	//print(getPopulation($population).'<br>');
	//print(getPopulationHealth($population));
?>