
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemon</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php require 'createPokemon.php'; ?>
    <?php 

	    if (isset($_GET['name'])) {
	    	$attacks = explode(';', $_GET['name']);
	    	foreach($attacks as $a){
		    	if($a=='attack0'){
		    		$pikachu->attack($charizard, $pikachu->attack[0]);
		    	}
		    	if($a=='attack1'){
		    		$pikachu->attack($charizard, $pikachu->attack[1]);
		    	}
		    	if($a=='attack2'){
		    		$pikachu->attack($charizard, $pikachu->attack[2]);
		    	}
		    	if($a=='attack3'){
		    		$pikachu->attack($charizard, $pikachu->attack[3]);
		    	}
	    	}
	    	
		} 	
	?>
</head>
<body>
    <p>
        <?php 
        	$index=0;
        	if (isset($_GET['name'])){
        		foreach($pikachu->attack as $attack){
	        		print('<a class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" href="index.php?name='.$_GET['name'].'attack'.$index.';">'.$attack->name.'</a>'); 
	        		$index=$index+1;
        		}
        	}else{
	        	foreach($pikachu->attack as $attack){
	        		print('<a class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" href="index.php?name=;attack'.$index.';">'.$attack->name.'</a>'); 
	        		$index=$index+1;
        		}
        	}
        ?>
    </p>
</body>
</html>

