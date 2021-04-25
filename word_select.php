<?php  include "includes/connection.php" ;

session_start();


$game_level = $_POST['game_level'];
$game_genre = $_POST['game_genre'];


$sql = "SELECT word_name FROM `words` WHERE game_level_id = '$game_level' AND game_genre_id = '$game_genre'";

$result = mysqli_query($conn, $sql);

		
	if( mysqli_num_rows( $result ) > 0 ){
		$i = 0;
		while( $row = mysqli_fetch_assoc( $result ) ){
			$words[$i] = $row['word_name'];
			$i++;
		}
	
		$random_id = rand(0, $i);
		$_SESSION['word'] = $words[$random_id];

		$_SESSION['clickedLetters']=[];
		$_SESSION['hiddenWord']=[]; 
		$_SESSION['error']=0; 
		$_SESSION['gameLevel_Id']= $game_level; 
		$_SESSION['startTime'] =  hrtime(true) / 1000000000;

		for ($i=0; $i < strlen($_SESSION['word']); $i++) { 
 			$_SESSION['hiddenWord'][$i] = '_'; 
		}
		header('location:game.php');

	}else {
		die('Query failed!' . mysqli_error($conn));
	}

 
 
?>
