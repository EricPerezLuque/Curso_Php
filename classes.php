<?php
declare(strict_types=1);
class SuperHero{
	//Propiedades y métodos
	//Promoted porperties -> PHP8 readonly solo lectura para no modificar
	public function __construct(readonly private string $name, public array $powers, public string $planet){

	}

	public function attack(){
		return "¡$this->name ataca con su superpoderes";
	}

	public function show_all(){
		return get_object_vars($this);

	}

	public function description(){
		$powers=implode(", ", $this->powers);
		return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes:
			$powers";
	}
	public static function random(){
		$names=["thor","hulk","spiderman","Wolverine"];
		$powers=[
			["superfuerza","Volar","Rayos láser"],
			["superfuerza","Super agilidad","Telarañas"],
			["Regeneración","SuperFuerza","Garras Adamamtium"],
			["Super inteligencia","Super Traje", "Dinero"]];
		$planets=["Tierra","Krypton","Asgard"];

		$name=$names[array_rand($names)];
		$power=$powers[array_rand($powers)];
		$planet=$planets[array_rand($planets)];

		return new self($name,$power,$planet);
		
	}

}
//instanciar
$hero=new SuperHero("Batman",["inteligencia","dinero"," tecnología"],"Gotham");

$hero2=new SuperHero("Superman",["SuperFuerza","Super calzones rojos"," rayos láser"],"Krypton");
echo $hero-> description();
//error al ponerlo en privado
//echo $hero->name;

var_dump($hero->show_all());

//metodo estático
$hero=SuperHero::random();
echo $hero->description();
?>