<?php
declare(strict_types=1);
# incializar una nueva sesion de cURL; ch=cURL handle
//$ch=curl_init(API_URL);
#Indicar que queremos recibir el resultado de la peticion y no mostrarlo en pantalla.
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la peteción y guardamos el resultado*/
//$result=curl_exec($ch);
//curl_close($ch);
//var_dump($data)
//una alternativa seria utilizar file_get_contents es mas sencilla
function render_template(string $template, array $data=[]){
	//como le paso el $data al template
	extract($data);
	require "templates/$template.php";

}
function get_data(string $url): array{
	
	$result=file_get_contents(API_URL);
	$data=json_decode($result,true);
	return $data;
}

function get_until_message(int $days): string{

	return match (true) {
		$days == 0 => "Hoy se estrena",
		$days == 1 => "mañana se estrena",
		$days < 7  => "Esta semana se estrena",
		$days < 30 => "Este mes se estrena",
		default    => "$days dias hasta el entreno",
		 };

}

?>