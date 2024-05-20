
	<?php
		//no puedes poner numero al principio ni otro $
		$name="Eric";
		$isDev = true;
		$age = 39;
		//simbolo + no sirve para concatenar el . es el que sirve para concatenar
		$newAge=44+'1';
		$isOld=$age > 40;
		//Globales
		define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');
		//constante
		const nombre='Eric';
		$output="Hola ". $name . " con una edad de " . $age;
		//$output.=", y es guapo";
		/*
		var_dump($name);
		var_dump($age);
		var_dump($isDev);
		echo gettype($name);
		echo is_bool($isDev);
		//IF
		*/
		/*if($isOld){
			echo "<h2>Eres viejo, lo siento</h2>";
		}elseif($isDev){
			echo "No eres viejo, pero eres Dev estas jodido";
		}
		else{
			echo "<h2>Eres joven</h2>";
		}*/
		
		//if Ternaria
		/*
		$outputAge=$isOld
			?'Eres viejos , lo siento'
			:'Eres joven, guay';
		*/
		 //Esto no funciona puede ser por la version no se.
		 $outputAge = match (true) {
		     $age < 2 => 'Eres un bebé',
		     $age < 10 => 'Eres un niño',
		     $age < 18 => 'Eres un adolescente',
		     $age >= 18 => 'Eres mayor de edad',
		     $age < 40 => 'Eres un adulto joven',
		     default => 'Eres un adulto viejo',
		 };
		
		 //mas entendible que if
	?>
		<?php if ($isOld) : ?>
			<h2>Eres viejo lo siento</h2>
		<?php elseif($isDev): ?>
			<h2>No eres viejo, pero eres Dev. Estas jodido.</h2>
		<?php else : ?>
			<h2>Eres joven felicidades</h2>
		<?php endif ; ?> 
	<?php

		//Arrays
		$bestLanguages=["PHP","Javascript","Python",1,2];
		$bestLanguages[3]="Java";
		$bestLanguages[]="Typescript";

		$person=[
			"name"=>"Eric",
			"age"=>78,
			"isDev"=>true,
			"languages"=>["PHP","Javascript","Python"],
		];

		$person["name"]="Laura";
		$person["languages"][]="Java";
		?>

		<h3>El mejor lenguaje es <?=$bestLanguages[0]?></h3>
		<ul>
			<?php foreach ($bestLanguages as $key =>$language ): ?> 
				<li><?=$key." ".$language?></li>
			<?php endforeach; ?>		
		</ul>


<img src="<?=LOGO_URL?>" alt="PHP Logo" width="200">	
<h1>	
	<?= $outputAge ?>
</h1>
<style type="text/css">
	:root{
		color-scheme:light dark;
	}
	body{

		display:grid;
		place-content:center;
	}


</style>