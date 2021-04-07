<?php
session_start();
$_SESSION['game_level_choice']='medium';
$_SESSION['game_genre_name'] = 'sports';
$_SESSION['word'] = 'голф';
$_SESSION['time_start'] = date('H:i:s');
$_SESSION['error'] = 0;
$_SESSION['hiddenWord']=[];
for ($i=0; $i < mb_strlen($_SESSION['word']); $i++) { 
	$_SESSION['hiddenWord'][$i] = '_';
}
var_dump($_SESSION['hiddenWord']);
//
//error = 0 i v game.php ++

//time funkciq taq promenliva da e ravna na time ()