<?php

if (!isset($_SESSION)) { session_start(); }

function letterCheck(string $letter){
 	$error = 'da';
	for ($i=0; $i < strlen($_SESSION['word']) ; $i++) { 
	    if ($_SESSION['word'][$i] === $letter) {
	        $error = "ne";
	        $_SESSION['hiddenWord'][$i] = $_SESSION['word'][$i];
	    } 
	} 
	
	if($error === 'da'){
		$_SESSION['error']++;
	}
}


function saveResult(){
include "connection.php" ;
 	$player_id = $_SESSION['player_id'];
	$time = $_SESSION['time'];
	$lavel = $_SESSION['game_level_id'];

	$sql = "INSERT INTO leederbord (time, player_id, game_level_id) VALUES ('$time', '$player_id', '$lavel')";

	mysqli_query($conn, $sql);
    $conn->close();
}


function timeFormatter(int $time){
  $min = $time / 60;
  $sec = $time % 60;

  $stringTime =  number_format($min, 0) . ' : ' . $sec ;
  return $stringTime;
}