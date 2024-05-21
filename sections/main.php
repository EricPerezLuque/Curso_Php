<main>
	<!--
	<pre style="font-size: 8px; overflow:scroll; height: 250px;">
		<?=var_dump($data)?>
	</pre>
	-->	
	<section>
		<img src="<?= $poster_url; ?>" width="200" alt="poster de <?=$title; ?>"
		style="border-radius: 16px"/>
	</section>

	<hgroup>
		<h2><?= $data["title"]; ?> - <?= $until_message ?></h2>
		<p>Fecha de estreno: <?= $release_date; ?></p>
		<p>La siguiente es <?= $following_production["title"]; ?></p>
	</hgroup>
</main>