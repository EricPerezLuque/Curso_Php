<?php
# incializar una nueva sesion de cURL; ch=cURL handle
const API_URL="https://whenisthenextmcufilm.com/api";
$ch=curl_init(API_URL);
#Indicar que queremos recibir el resultado de la peticion y no mostrarlo en pantalla.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la peteción y guardamos el resultado*/
$result=curl_exec($ch);
//una alternativa seria utilizar file_get_contents
//$result=file_get_contents(API_URL);
$data=json_decode($result,true);
curl_close($ch);
//var_dump($data)
?>

<head>
	<meta charset="utf-8">
	<title>La proxima pelicula de marvel</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head>

<main>
	<pre style="font-size: 8px; overflow:scroll; height: 250px;">
		<?=var_dump($data)?>
	</pre>	
	<section>
		<img src="<?= $data['poster_url']; ?>" width="200" alt="poster de <?=$data['title']; ?>"
		style="border-radius: 16px"/>
	</section>

	<hgroup>
		<h2><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias.</h2>
		<p>Fecha de estreno: <?= $data["release_date"]; ?></p>
		<p>La siguiente es <?= $data["following_production"]["title"] ?></p>
	</hgroup>
</main>




<style type="text/css">
	:root{
		color-scheme:light dark;
	}

	section{
		dissplay:flex;
		justify-content: center;

	}
	hgroup{
		display: flex;
		flex-direction: column;
		justify-content: center;
		text-align: center;
	}
	img{
		margin:0 auto;
		display: flex;
	}


</style>