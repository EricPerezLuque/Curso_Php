<?php
require_once 'consts.php';
//Mejor enterarme si algo falla 
require_once 'functions.php';
require_once 'classes/NextMovie.php';
//Algo secundario
//include 'functions.php';

$next_movie= NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data=$next_movie->get_data();
//$data=get_data(API_URL);
//$until_message=get_until_message($data["days_until"]);

?>
<?php render_template('head', ["title"=> $next_movie_data["title"]]); ?>
<?php render_template('main', array_merge($next_movie_data , ["until_message"=> $next_movie->get_until_message()])); ?>
<?php render_template('styles'); ?>